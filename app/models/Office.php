<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lands
 *
 * @author Tierica
 */
class Office extends Eloquent {    
    protected $table = 'offices';
    protected $guarded = ['id', 'created_at', 'updated_at'];
        
    public function commons()
    {
        return $this->hasOne('AssetCommon', 'asset_id');
    }             
    
    public function floors() {
        return $this->hasMany('Floor', 'office_id');
    }
}