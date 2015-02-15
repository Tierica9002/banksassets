<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Type
 *
 * @author Tierica
 */
class Type extends Eloquent{
    protected $table = 'asset_types';
    
    public function assets() {
        return $this->hasManyThrough('AssetAttributes','Asset', 'type_id', 'asset_id');
    }
    
    public function groups() {
        return $this->hasMany('Group');
    }
    
    
}
