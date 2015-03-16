<?php

class AttachmentController extends \BaseController {

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {               
        if (Input::hasFile('file')) {
            $files = Input::file('file');            
            foreach ($files as $file) {
                $destinationPath = public_path() . '/uploaded_files/';
                $filename = str_random(6) . '_' . $file->getClientOriginalName();
                $uploadSuccess = $file->move($destinationPath, $filename);
                $attachment = new Attachment();
                $attachment->filename = $filename;
                $attachment->type = 'image';
                $attachment->save();

                if ($galleryPhotos = Session::get('gallery_photos')) {
                    $galleryPhotos[] = $attachment->id;
                } else {
                    $galleryPhotos = [$attachment->id];
                }
                Session::put('gallery_photos', $galleryPhotos);
            }
        }
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
