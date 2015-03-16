<?php

class ResidentialComplexController extends \BaseController {

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
        $residentials = ResidentialComplex::all();
        return View::make('admin.assets.residential_complexes.index')->withResidentials($residentials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('admin.assets.residential_complexes.addresidential_complex');
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
        $columns = cleanKeysFromColumns('residential_complexes');

        $residential = new ResidentialComplex();

        foreach ($columns as $key => $column) {
            if (isset($inputs[$column])) {
                $residential->$column = $inputs[$column];
            } else {
                $residential->$column = '';
            }
        }

        $residential->save();

        $assetCommon = new AssetCommon();
        $assetCommon->pret = Input::get('pret');
        $assetCommon->asset_type = 'Land';
        if (Input::get('premium_property')) {
            $assetCommon->premium_property = 1;
        } else {
            $assetCommon->premium_property = 0;
        }
        $assetCommon->asset_id = $residential->id;
        $assetCommon->save();

        if (count($photoIds) > 0) {
            foreach ($photoIds as $photoId) {
                $image = Attachment::FindOrFail($photoId);
                $image->parent_id = $assetCommon->id;
                $image->save();
            }
        }

        return Redirect::route('administrator.residentialcomplex.index')->withMessage('Residential Complex has been added!');
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
        $residential = ResidentialComplex::findOrFail($id);
        $commons = $residential->commons;
        $photos = $commons->attachments;
        return View::make('admin.assets.residential_complexes.editresidential_complex')->withResidential($residential)->withCommons($commons)->withPhotos($photos);
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
        $columns = cleanKeysFromColumns('residential_complexes');
        $residential = ResidentialComplex::findOrFail($id);
        foreach ($columns as $key => $column) {
            if (isset($inputs[$column])) {
                $residential->$column = $inputs[$column];
            } else {
                $residential->$column = '';
            }
        }

        $commons = $residential->commons;
        $commons->pret = (float) Input::get('pret');
        if (Input::get('premium_property')) {
            $commons->premium_property = 1;
        } else {
            $commons->premium_property = 0;
        }

//        echo "<pre>";
//        dd($floorSurfaceValues, $floorRentCostValues);

        $residential->save();
        $commons->save();
        if (count($photoIds) > 0) {
            foreach ($photoIds as $photoId) {
                $image = Attachment::FindOrFail($photoId);
                $image->parent_id = $commons->id;
                $image->save();
            }
        }

        return Redirect::route('administrator.residentialcomplex.index')->withMessage('Residential Complex has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $residential = ResidentialComplex::findOrFail($id);

        $commons = $residential->commons;
        $images = $residential->attachments;        

//        echo "<pre>";
//        dd($id, $office, $images);
        if (count($images) > 0) {
            foreach ($images as $image) {
                $image->delete();
                File::delete(public_path() . '/uploaded_files/' . $image->filename);
            }
        }      
        $commons->delete();
        $residential->delete();

        return Redirect::route('administrator.residentialcomplex.index')->withMessage('Residential Complex deleted.');
    }

}
