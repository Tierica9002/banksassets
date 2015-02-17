<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Attachment
 *
 * @author Tierica
 */
class Attachment extends Eloquent{
    protected $table = 'files';
    
    
    public function villa() {
        $this->belongsTo('Villa', 'asset_id');
    }
    
}
