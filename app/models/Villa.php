<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Villa
 *
 * @author Tierica
 */
class Villa extends Eloquent {

    protected $table = 'villas';
        
    public function commons()
    {
        return $this->hasOne('AssetCommon', 'asset_id');
    }      
    
    public function attachments() {
        return $this->hasMany('Attachment', 'parent_id');
    }
}
