<?php

class BlockController extends \BaseController {

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
        $blocks = Block::all();
        return View::make('admin.assets.blocks.index')->withBlocks($blocks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $residentials = ResidentialComplex::all();
        return View::make('admin.assets.blocks.addblock')->withResidentials($residentials);
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
        $columns = cleanKeysFromColumns('blocks');

        $block = new Block();

        foreach ($columns as $key => $column) {
            if (isset($inputs[$column])) {
                $block->$column = $inputs[$column];
            } else {
                $block->$column = '';
            }
        }

        $block->save();

        $assetCommon = new AssetCommon();
        $assetCommon->pret = Input::get('pret');
        $assetCommon->asset_type = 'Block';
        if (Input::get('premium_property')) {
            $assetCommon->premium_property = 1;
        } else {
            $assetCommon->premium_property = 0;
        }
        $assetCommon->asset_id = $block->id;
        $assetCommon->save();

        if (count($photoIds) > 0) {
            foreach ($photoIds as $photoId) {
                $image = Attachment::FindOrFail($photoId);
                $image->parent_id = $assetCommon->id;
                $image->save();
            }
        }

        return Redirect::route('administrator.block.index')->withMessage('Block has been added!');
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
        $block = Block::findOrFail($id);
        $commons = $block->commons;
        $photos = $commons->attachments;
        $residentials = ResidentialComplex::all();
        return View::make('admin.assets.blocks.editblock')->withBlock($block)->withCommons($commons)->withPhotos($photos)->withResidentials($residentials);
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
        $columns = cleanKeysFromColumns('blocks');
        $block = Block::findOrFail($id);   
        
        foreach ($columns as $key => $column) {
            if (isset($inputs[$column])) {
                $block->$column = $inputs[$column];
            } else {
                $block->$column = '';
            }
        }
        
        $commons = $block->commons;
        $commons->pret = (float) Input::get('pret');
        if (Input::get('premium_property')) {
            $commons->premium_property = 1;
        } else {
            $commons->premium_property = 0;
        }       

        $block->save();
        $commons->save();
        if (count($photoIds) > 0) {
            foreach ($photoIds as $photoId) {
                $image = Attachment::FindOrFail($photoId);
                $image->parent_id = $commons->id;
                $image->save();
            }
        }

        return Redirect::route('administrator.block.index')->withMessage('Block has been edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $block = Block::findOrFail($id);

        $commons = $block->commons;
        $images = $land->attachments;

        if (count($images) > 0) {
            foreach ($images as $image) {
                $image->delete();
                File::delete(public_path() . '/uploaded_files/' . $image->filename);
            }
        }

        $commons->delete();
        $block->delete();

        return Redirect::route('administrator.block.index')->withMessage('Block deleted.');
    }

}
