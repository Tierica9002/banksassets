<?php

class OfficeController extends \BaseController {

    public function __construct() {
        $this->beforeFilter('csrf', array('on' => ['post', 'put', 'delete']));
        $messages_counter = Contact::where('message_read', '=', 0)->count();
        View::share('messages_counter', $messages_counter);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $offices = Office::all();
        return View::make('admin.assets.offices.index')->withOffices($offices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('admin.assets.offices.addoffice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $photoIds = Session::get('gallery_photos');
        Session::put('gallery_photos', array());
        $inputs = cleanKeysFromInput();
        $columns = cleanKeysFromColumns('offices');
//        echo "<pre>";
//        dd($inputs, $columns);

        $office = new Office();

        foreach ($columns as $key => $column) {
            if (isset($inputs[$column])) {
                $office->$column = $inputs[$column];
            } else {
                $office->$column = '';
            }
        }

        $office->save();

        $floorSurfaceValues = Input::get('surface');
        $floorRentCostValues = Input::get('rent_cost');

        $floors = array();

        for ($i = 0; $i < count($floorSurfaceValues); $i++) {
            $floors[$i]['surface'] = $floorSurfaceValues[$i];
            $floors[$i]['rentCost'] = $floorRentCostValues[$i];
        }

        foreach ($floors as $key => $floorVals) {
            $floor = new Floor();
            $floor->nr = $key + 1;
            $floor->surface = $floorVals['surface'];
            $floor->rent_cost = $floorVals['rentCost'];
            $floor->office_id = $office->id;
            $floor->save();
        }

        $assetCommon = new AssetCommon();
        $assetCommon->pret = Input::get('pret');
        $assetCommon->asset_type = 'Office';
        if (Input::get('premium_property')) {
            $assetCommon->premium_property = 1;
        } else {
            $assetCommon->premium_property = 0;
        }
        $assetCommon->asset_id = $office->id;
        $assetCommon->save();

        foreach ($photoIds as $photoId) {
            $image = Attachment::FindOrFail($photoId);
            $image->parent_id = $assetCommon->id;
            $image->save();
        }

        return Redirect::route('administrator.office.index')->withMessage('Office has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $office = Office::findOrFail($id);
        $commons = $office->commons;
        $photos = $commons->attachments;
        $floors = $office->floors;
        return View::make('admin.assets.offices.editoffice')->withOffice($office)->withCommons($commons)->withPhotos($photos)->withFloors($floors);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $photoIds = Session::get('gallery_photos');
        Session::put('gallery_photos', array());
        $inputs = cleanKeysFromInput();
        $columns = cleanKeysFromColumns('offices');
        $office = Office::findOrFail($id);        
        foreach ($columns as $key => $column) {
            if (isset($inputs[$column])) {
                $office->$column = $inputs[$column];
            } else {
                $office->$column = '';
            }
        }

        $commons = $office->commons;
        $commons->pret = (float) Input::get('pret');
        if (Input::get('premium_property')) {
            $commons->premium_property = 1;
        } else {
            $commons->premium_property = 0;
        }
        $floorSurfaceValues = Input::get('surface');
        $floorRentCostValues = Input::get('rent_cost');

        $fetchedFloors = $office->floors;               
        foreach ($fetchedFloors as $fetchedFloor) {           
            $fetchedFloor->delete();
        }
        
        $floors = array();

        for ($i = 0; $i < count($floorSurfaceValues); $i++) {
            $floors[$i]['surface'] = $floorSurfaceValues[$i];
            $floors[$i]['rentCost'] = $floorRentCostValues[$i];
        }
        foreach ($floors as $key => $floorVals) {
            $floor = new Floor();
            $floor->nr = $key + 1;
            $floor->surface = $floorVals['surface'];
            $floor->rent_cost = $floorVals['rentCost'];
            $floor->office_id = $office->id;
            $floor->save();
        }

//        echo "<pre>";
//        dd($floorSurfaceValues, $floorRentCostValues);

        $office->save();
        $commons->save();
        if (count($photoIds) > 0) {
            foreach ($photoIds as $photoId) {
                $image = Attachment::FindOrFail($photoId);
                $image->parent_id = $commons->id;
                $image->save();
            }
        }

        return Redirect::route('administrator.office.index')->withMessage('Office has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $office = Office::findOrFail($id);

        $commons = $office->commons;
        $images = $office->attachments;
        $floors = $office->floors;
        
//        echo "<pre>";
//        dd($id, $office, $images);
        if (count($images) > 0) {
            foreach ($images as $image) {
                $image->delete();
                File::delete(public_path() . '/uploaded_files/' . $image->filename);
            }
        }
        if (count($floors) > 0) {
            foreach ($floors as $floor) {
                $floor->delete();
            }
        }
        $commons->delete();
        $office->delete();

        return Redirect::route('administrator.office.index')->withMessage('Office deleted.');
    }

}
