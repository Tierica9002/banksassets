<?php

class UserMessageController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        
        $messages_counter = UserMessage::where('message_read', '=', 0)->count();
        
        return View::make('admin.messages', array('messages_counter' => $messages_counter));
    }
    
    public function serveEmails() {
        
        
        $messages = UserMessage::all();
        $returnJson = [];
        $returnJson['emails'] = [];
        $returnJson['emails'][0]['group'] = 'All Items';
        $k = 0;
        foreach ($messages as $message) {
            $returnJson['emails'][0]['list'][$k] = [
                'id' => $message->id,
                'subject' => 'Contact form request',
                'body' => $message->user_text,
                'to' => ['no-reply@banks-assets.com'],
                'time' => (string) $message->created_at,
                'datetime' => (string) $message->created_at,
                'from' => $message->user_name,
                'dp' => 'jepiimici.jpg',
                'dpRetina' => 'jepiimari.jpg'
                ];
            $k++;
        }        
        
        return Response::json($returnJson);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $rules = array(
            'user_name' => array('required'),
            'user_email' => array('required'),
            'user_message' => array('required')
        );

        // pass input to validator
        $validator = Validator::make(Input::all(), $rules);
        
        // test if input fails
        if ($validator->fails()) {
            return Redirect::route('main.contact')->withErrors($validator)->withInput();
        }
        
        $name = Input::get('user_name');
        $email = Input::get('user_email');
        $phone = Input::get('user_phone');
        $user_message = Input::get('user_message');      
        
        $message = new UserMessage();
        $message->user_name = $name;
        $message->user_email = $email;
        $message->user_phone = $phone;
        $message->user_text = $user_message;        
        $message->save();        
        
        return Redirect::route('main.contact')->withMessage('Message has been sent!');
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
