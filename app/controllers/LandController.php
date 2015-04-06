<?php

class LandController extends \BaseController {

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
        $lands = Land::all();
        return View::make('admin.assets.lands.index')->withLands($lands);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('admin.assets.lands.addland');
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
        $columns = cleanKeysFromColumns('lands');

        $land = new Land();

        foreach ($columns as $key => $column) {
            if (isset($inputs[$column])) {
                $land->$column = $inputs[$column];
            } else {
                $land->$column = '';
            }
        }

        $land->save();

        $assetCommon = new AssetCommon();
        $assetCommon->pret = Input::get('pret');
        $assetCommon->asset_type = 'Land';
        if (Input::get('premium_property')) {
            $assetCommon->premium_property = 1;
        } else {
            $assetCommon->premium_property = 0;
        }
        $assetCommon->asset_id = $land->id;
        $assetCommon->save();

        if (Input::hasFile('proiect_constructie')) {
            $file = Input::file('proiect_constructie');
            $destinationPath = public_path() . '/uploaded_files/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $attachment = new Attachment();
            $attachment->filename = $filename;
            $attachment->type = 'proiect_constructie';
            $attachment->parent_id = $land->id;
            $attachment->save();
        }
        if (count($photoIds) > 0) {
            foreach ($photoIds as $photoId) {
                $image = Attachment::FindOrFail($photoId);
                $image->parent_id = $assetCommon->id;
                $image->save();
            }
        }

        return Redirect::route('administrator.land.index')->withMessage('Land has been added!');
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
        $land = Land::findOrFail($id);
        $commons = $land->commons;
        $documents = DB::table('files')->where('parent_id', '=', $commons->id)->where('type', '=', 'document')->get();    
        
        $photos = DB::table('files')->where('parent_id', '=', $commons->id)->where('type', '=', 'image')->get();
               
        return View::make('admin.assets.lands.editland')->withLand($land)->withCommons($commons)->withPhotos($photos)->withDocuments($documents);
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
        $columns = cleanKeysFromColumns('lands');
        $land = Land::findOrFail($id);        
        foreach ($columns as $key => $column) {
            if (isset($inputs[$column])) {
                $land->$column = $inputs[$column];
            } else {
                $land->$column = '';
            }
        }
        
        $commons = $land->commons;
        $commons->pret = (float) Input::get('pret');
        if (Input::get('premium_property')) {
            $commons->premium_property = 1;
        } else {
            $commons->premium_property = 0;
        }
       
        $land->save();
        $commons->save();                        
        if (count($photoIds) > 0) {
            foreach ($photoIds as $photoId) {
                $image = Attachment::FindOrFail($photoId);
                $image->parent_id = $commons->id;
                $image->save();
            }
        }

        return Redirect::route('administrator.land.index')->withMessage('Land has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $land = Land::findOrFail($id);

        $commons = $land->commons;
        $images = $land->attachments;
        $floors = $land->floors;

//        echo "<pre>";
//        dd($id, $office, $images);
        if (count($images) > 0) {
            foreach ($images as $image) {
                $image->delete();
                File::delete(public_path() . '/uploaded_files/' . $image->filename);
            }
        }

        $commons->delete();
        $land->delete();

        return Redirect::route('administrator.land.index')->withMessage('Land deleted.');
    }

}
