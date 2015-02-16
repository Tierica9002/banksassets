<?php

class UserController extends \BaseController {

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
        $users = Sentry::findAllUsers();
        return View::make('admin.userslist')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('admin.createuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $rules = array(
            'first_name' => array('required'),
            'last_name' => array('required'),
            'email' => array('required', 'unique:users')
        );

        // pass input to validator
        $validator = Validator::make(Input::all(), $rules);

        // test if input fails
        if ($validator->fails()) {
            return Redirect::route('administrator.user.create')->withErrors($validator)->withInput();
        }

        $first_name = Input::get('first_name');
        $last_name = Input::get('last_name');
        $email = Input::get('email');
        $password = Input::get('password');
        $user = Sentry::createUser(array(
                    'email' => $email,
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'password' => $password,
                    'activated' => true,
        ));
        return Redirect::route('administrator.user.index')->withMessage('User was created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $user = Sentry::findUserById($id);
        return View::make('admin.edituser')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {

        $rules = array(
            'first_name' => array('required'),
            'last_name' => array('required'),
            'email' => array('required', 'unique:users,email,' . $id)
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::route('administrator.user.edit', array($id))->withErrors($validator)->withInput();
        }

        $user = Sentry::findUserById($id);

        $user->first_name = Input::get('first_name');
        $user->last_name = Input::get('last_name');
        $user->email = Input::get('email');
        $user->save();

        return Redirect::route('administrator.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $user = Sentry::findUserById($id);
        $user->delete();

        return Redirect::route('administrator.user.index')->withMessage('User deleted.');
    }

}
