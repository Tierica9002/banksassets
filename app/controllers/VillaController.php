<?php

class VillaController extends \BaseController {

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
        $villas = Villa::all();
        return View::make('admin.assets.villas.index')->withVillas($villas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('admin.assets.villas.addvilla');
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
        $columns = cleanKeysFromColumns('villas');
        $villa = new Villa();

        foreach ($columns as $key => $column) {
            if (isset($inputs[$column])) {
                $villa->$column = $inputs[$column];
            } else {
                $villa->$column = '';
            }
        }

        $villa->save();

        $assetCommon = new AssetCommon();
        $assetCommon->pret = Input::get('pret');
        $assetCommon->asset_type = 'Villa';
        $assetCommon->asset_id = $villa->id;

        $assetCommon->save();

        foreach ($photoIds as $photoId) {
            $image = Attachment::FindOrFail($photoId);
            $image->parent_id = $assetCommon->id;
            $image->save();
        }

        return Redirect::route('administrator.villa.index')->withMessage('Villa has been added!');
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
        $villa = Villa::findOrFail($id);

        $commons = $villa->commons;
        $photos = $commons->attachments;
        
        return View::make('admin.assets.villas.editvilla')->withVilla($villa)->withCommons($commons)->withPhotos($photos);
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
        $columns = cleanKeysFromColumns('villas');
        $villa = Villa::findOrFail($id);
        foreach ($columns as $key => $column) {
            if (isset($inputs[$column])) {
                $villa->$column = $inputs[$column];
            } else {
                $villa->$column = '';
            }
        }

        $commons = $villa->commons;
        $commons->pret = (float) Input::get('pret');
        $villa->save();
        $commons->save();

        foreach ($photoIds as $photoId) {
            $image = Attachment::FindOrFail($photoId);
            $image->parent_id = $commons->id;
            $image->save();
        }        
        return Redirect::route('administrator.villa.index')->withMessage('Villa has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $villa = Villa::findOrFail($id);
        $commons = $villa->commons;
        $images = $villa->attachments;
        if (count($images) > 0) {
            foreach ($images as $image) {
                $image->delete();
                File::delete(public_path() . '/uploaded_files/' . $image->filename);
            }
        }
        $commons->delete();
        $villa->delete();

        return Redirect::route('administrator.villa.index')->withMessage('Villa deleted.');
    }

}
