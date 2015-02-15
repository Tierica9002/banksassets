<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AssetAttributes
 *
 * @author Tierica
 */
class AssetAttributes extends Eloquent{
    protected $table = 'asset_attributes';
    
    public function asset() {
        return $this->belongsTo('Asset');
    }
}
