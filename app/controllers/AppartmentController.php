<?php

class AppartmentController extends \BaseController {

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
        $appartments = Appartment::all();
        return View::make('admin.assets.appartments.index')->withAppartments($appartments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $blocks = Block::all();
        return View::make('admin.assets.appartments.addappartment')->withBlocks($blocks);
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
        $columns = cleanKeysFromColumns('appartments');

        $appartment = new Appartment();

        foreach ($columns as $key => $column) {
            if (isset($inputs[$column])) {
                $appartment->$column = $inputs[$column];
            } else {
                $appartment->$column = '';
            }
        }

        $appartment->save();

        $assetCommon = new AssetCommon();
        $assetCommon->pret = Input::get('pret');
        $assetCommon->asset_type = 'Appartment';
        if (Input::get('premium_property')) {
            $assetCommon->premium_property = 1;
        } else {
            $assetCommon->premium_property = 0;
        }
        $assetCommon->asset_id = $appartment->id;
        $assetCommon->save();

        if (count($photoIds) > 0) {
            foreach ($photoIds as $photoId) {
                $image = Attachment::FindOrFail($photoId);
                $image->parent_id = $assetCommon->id;
                $image->save();
            }
        }

        return Redirect::route('administrator.appartment.index')->withMessage('Appartment has been added!');
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
        $appartment = Appartment::findOrFail($id);
        $commons = $appartment->commons;
        $photos = $commons->attachments;
        $blocks = Block::all();
        return View::make('admin.assets.appartments.editappartment')->withAppartment($appartment)->withCommons($commons)->withPhotos($photos)->withBlocks($blocks);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
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
