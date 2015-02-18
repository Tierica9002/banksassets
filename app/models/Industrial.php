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
class Industrial extends Eloquent {    
    protected $table = 'industrials';
    protected $guarded = ['id', 'created_at', 'updated_at'];
        
    public function commons()
    {
        return $this->hasOne('AssetCommon', 'asset_id');
    }             
}
