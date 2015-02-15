<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Asset
 *
 * @author Tierica
 */
class Asset extends Eloquent{
    protected $table = 'assets';
    
    public function type() {
        return $this->belongsTo('Type');
    }
    
    public function attributes() {
        return $this->hasOne('AssetAttributes');
    }
}
