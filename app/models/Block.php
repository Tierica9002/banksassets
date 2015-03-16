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
class Block extends Eloquent {    
    protected $table = 'blocks';
    protected $guarded = ['id', 'created_at', 'updated_at','residential_id'];
        
    public function commons()
    {
        return $this->hasOne('AssetCommon', 'asset_id');
    }             
    
    public function residentialComplex() {
        return $this->belongsTo('ResidentialComplex');
    }
    
    public function appartments() {
        return $this->hasMany('Appartment', 'block_id');
    }
}
