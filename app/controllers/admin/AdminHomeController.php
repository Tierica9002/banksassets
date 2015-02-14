<?php

class AdminHomeController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'AdminHomeController@showWelcome');
      |
     */

    public function __construct() {
        $this->beforeFilter('csrf', array('on' => ['post', 'put', 'delete']));
        
        $messages_counter = Contact::where('message_read', '=', 0)->count();        
        View::share('messages_counter', $messages_counter);
    }

    public function index() {
        return View::make('admin.index');
    }

    public function login() {
        return View::make('admin.login');
    }

    public function logout() {
        Sentry::logout();
        return Redirect::route('administrator.login');
    }

    public function doLogin() {
        $rules = array(
            'username' => ['required'],
            'password' => ['required']
        );

        // pass input to validator
        $validator = Validator::make(Input::all(), $rules);
        
        // test if input fails
        if ($validator->fails()) {
            return Redirect::route('administrator.login')->withErrors($validator);
        }
        $email = Input::get('username');
        $password = Input::get('password');
        $rememberMe = Input::get('remember-me');
        if ($rememberMe == '1') {
            $rememberMe = true;
        } else {
            $rememberMe = false;
        }



        try {
            // Login credentials
            $credentials = array(
                'email' => $email,
                'password' => $password,
            );

            // Authenticate the user
            $user = Sentry::authenticate($credentials, false);
            // Login the user            
            Sentry::login($user, $rememberMe);
        } catch (Cartalyst\Sentry\Users\LoginRequiredException $e) {
            echo 'Login field is required.';
        } catch (Cartalyst\Sentry\Users\PasswordRequiredException $e) {
            echo 'Password field is required.';
        } catch (Cartalyst\Sentry\Users\WrongPasswordException $e) {
            echo 'Wrong password, try again.';
        } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            echo 'User was not found.';
        } catch (Cartalyst\Sentry\Users\UserNotActivatedException $e) {
            echo 'User is not activated.';
        }

        return Redirect::route('administrator.dashboard');
    }

    public function register() {        
        try {
            // Create the user
            $user = Sentry::createUser(array(
                        'email' => 'e.sandu@gmail.com',
                        'password' => 'qwerty123',
                        'first_name' => 'Emanuel',
                        'last_name' => 'Sandu',
                        'activated' => true,
            ));

            // Find the group using the group id
            $adminGroup = Sentry::findGroupById(3);

            // Assign the group to the user
            $user->addGroup($adminGroup);
        } catch (Cartalyst\Sentry\Users\LoginRequiredException $e) {
            echo 'Login field is required.';
        } catch (Cartalyst\Sentry\Users\PasswordRequiredException $e) {
            echo 'Password field is required.';
        } catch (Cartalyst\Sentry\Users\UserExistsException $e) {
            echo 'User with this login already exists.';
        } catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e) {
            echo 'Group was not found.';
        }

        return View::make('admin.register');
    }

    public function dashboard() {
        return View::make('admin.index');
    }

}
