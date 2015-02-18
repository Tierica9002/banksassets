<?php

class IndustrialController extends \BaseController {

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
        $industrials = Industrial::all();
        return View::make('admin.assets.industrials.index')->withIndustrials($industrials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('admin.assets.industrials.addindustrial');
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
        $columns = cleanKeysFromColumns('industrials');
//        echo "<pre>";
//        dd($inputs, $columns);

        $industrial = new Industrial();
        foreach ($columns as $key => $column) {
            if (isset($inputs[$column])) {
                $industrial->$column = $inputs[$column];
            } else {
                $industrial->$column = '';
            }
        }

        $industrial->save();

        $assetCommon = new AssetCommon();
        $assetCommon->pret = Input::get('pret');
        $assetCommon->asset_type = 'Industrial';
        $assetCommon->asset_id = $industrial->id;

        $assetCommon->save();

        foreach ($photoIds as $photoId) {
            $image = Attachment::FindOrFail($photoId);
            $image->parent_id = $assetCommon->id;
            $image->save();
        }

        return Redirect::route('administrator.industrial.index')->withMessage('Industrial    has been added!');
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
        $industrial = Industrial::findOrFail($id);
        $commons = $industrial->commons;        
        $photos = $commons->attachments;        
        return View::make('admin.assets.industrials.editindustrial')->withIndustrial($industrial)->withCommons($commons)->withPhotos($photos);
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
        
        $industrial = Industrial::findOrFail($id);
        $input = cleanInput(Input::all());        
        $industrial->update($input);
        $commons = $industrial->commons;
        $commons->pret = (float) Input::get('pret');
        $industrial->save();
        $commons->save();

        foreach ($photoIds as $photoId) {
            $image = Attachment::FindOrFail($photoId);
            $image->parent_id = $commons->id;
            $image->save();
        }

        return Redirect::route('administrator.industrial.index')->withMessage('Industrials has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
