<?php

class TypeController extends \BaseController {

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
        $types = Type::all();
        return View::make('admin.assets.types.index')->withTypes($types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('admin.assets.types.addtype');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $rules = array(
            'type_name' => array('required', 'unique:asset_types')
        );

        // pass input to validator
        $validator = Validator::make(Input::all(), $rules);

        // test if input fails
        if ($validator->fails()) {
            return Redirect::route('administrator.type.create')->withErrors($validator)->withInput();
        }


        $type_name = Input::get('type_name');

        $message = new Type();
        $message->type_name = $type_name;
        $message->save();

        return Redirect::route('administrator.type.index')->withMessage('Type has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $type = Type::findOrFail($id);
        $assets = $type->assets;
        return View::make('admin.assets.index')->withAssets($assets);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $type = Type::findOrFail($id);
        $groups = $type->groups;

        return View::make('admin.assets.types.edittype')->withType($type)->withGroups($groups);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $rules = array(
            'type_name' => array('required', 'unique:asset_types,type_name,' . $id)
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::route('administrator.type.edit', array($id))->withErrors($validator)->withInput();
        }
        $type = Type::findOrFail($id);
        $type->type_name = Input::get('type_name');
        $type->save();
        
        $groupsStr = trim(Input::get('groups'),',');
        $deletedGroupsStr = trim(Input::get('before_update_groups'),',');
        $groups = explode(',', $groupsStr);
        $beforeUpdate = explode(',', $deletedGroupsStr);
        $deletedGroups = array_diff($beforeUpdate, $groups);        

        foreach ($groups as $groupName) {            
            if (!Group::where('group_name', '=', $groupName)->where('type_id','=',$id)->exists()) {
                $group = new Group();
                $group->group_name = $groupName;
                $group->type_id = $id;                
                $group->save();                                         
            } 
        }
        
        foreach ($deletedGroups as $deletedGroup) {
            $deleteGroup = Group::where('group_name', '=', $deletedGroup)->where('type_id','=',$id)->firstOrFail();
            $deleteGroup->delete();
        }
        return Redirect::route('administrator.type.index')->withMessage('Type updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $type = Type::findOrFail($id);
        $type->delete();

        return Redirect::route('administrator.type.index')->withMessage('Type has been deleted!');
    }

}
