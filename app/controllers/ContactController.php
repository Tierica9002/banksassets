<?php

class ContactController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $contacts = Contact::all();

        return View::make('admin.contacts')->withContacts($contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        Excel::create('ExcelExport', function ($excel) {

            $excel->sheet('Sheetname', function ($sheet) {

                // first row styling and writing content
                $sheet->mergeCells('A1:W1');
                $sheet->row(1, function ($row) {
                    $row->setFontFamily('Comic Sans MS');
                    $row->setFontSize(30);
                });

                $sheet->row(1, array('Some big header here'));

                // second row styling and writing content
                $sheet->row(2, function ($row) {

                    // call cell manipulation methods
                    $row->setFontFamily('Comic Sans MS');
                    $row->setFontSize(15);
                    $row->setFontWeight('bold');
                });

                $sheet->row(2, array('Something else here'));

                // getting data to display - in my case only one record
                $users = User::get()->toArray();

                // setting column names for data - you can of course set it manually
                $sheet->appendRow(array_keys($users[0])); // column names
                // getting last row number (the one we already filled and setting it to bold
                $sheet->row($sheet->getHighestRow(), function ($row) {
                    $row->setFontWeight('bold');
                });

                // putting users data as next rows
                foreach ($users as $user) {
                    $sheet->appendRow($user);
                }
            });
        })->export('xls');
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

        $message = new Contact();
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
        $contact = Contact::findOrFail($id);
        return View::make('admin.editcontact')->withContact($contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $rules = array(
            'user_name' => array('required'),
            'user_email' => array('required')            
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::route('administrator.user.edit', array($id))->withErrors($validator)->withInput();
        }

        $user = Contact::findOrFail($id);

        $user->user_name = Input::get('user_name');
        $user->user_email = Input::get('user_email');
        $user->user_phone = Input::get('user_phone');
        $user->user_text  = Input::get('user_text');
        $user->save();

        return Redirect::route('administrator.contact.index')->withMessage('Contact updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return Redirect::route('administrator.contact.index')->withMessage('Contact deleted.');
    }

    public function serveAsMessages() {
        $messages_counter = Contact::where('message_read', '=', 0)->count();

        return View::make('admin.messages', array('messages_counter' => $messages_counter));
    }

    public function serveEmails() {
        $messages = Contact::all();
        $returnJson = [];
        $returnJson['emails'] = [];
        $returnJson['emails'][0]['group'] = 'All Items';
        $k = 0;
        foreach ($messages as $message) {
            $returnJson['emails'][0]['list'][$k] = [
                'id' => $message->id,
                'subject' => 'Contact form request',
                'body' => $message->user_text,
                'to' => [$message->user_email],
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

}
