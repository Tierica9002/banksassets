<?php

class AssetController extends \BaseController {

    public function __construct() {
        $this->beforeFilter('csrf', array('on' => ['post', 'put', 'delete']));
        $types = Type::all();
        $messages_counter = Contact::where('message_read', '=', 0)->count();
        View::share('messages_counter', $messages_counter);
        View::share('types', $types);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('admin.assets.addasset');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $rules = array(
            'title' => array('required', 'unique'),
            'description' => array('required'),
            'address' => array('required')
        );

        // pass input to validator
        $validator = Validator::make(Input::all(), $rules);

        // test if input fails
        if ($validator->fails()) {
            return Redirect::route('administrator.asset.create')->withErrors($validator)->withInput();
        }


        $title = Input::get('title');
        $description = Input::get('description');
        $address = Input::get('address');
        
        $asset = new Asset();
        $asset->title = $title;
        $asset->description = $title;
        $asset->address = $address;
        $asset->save();

        return Redirect::route('administrator.type.index')->withMessage('Type has been added!');
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
        //
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
