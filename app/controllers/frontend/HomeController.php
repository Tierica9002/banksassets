<?php

class HomeController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    public function index() {
        $context_data = [];
        $context_data['body_class'] = 'page-homepage navigation-fixed-top page-slider horizontal-search';
        
        return View::make('frontend.index',array('context_data' => $context_data));
    }

    public function about() {
        $context_data = [];
        $context_data['body_class'] = 'page-sub-page page-about-us';
        
        return View::make('frontend.about',array('context_data' => $context_data));
    }

    public function contact() {        
        $context_data = [];
        $context_data['body_class'] = 'page-sub-page page-contact';
        $context_data['scripts'] = array('');        
        return View::make('frontend.contact',array('context_data' => $context_data));   
    }

}
