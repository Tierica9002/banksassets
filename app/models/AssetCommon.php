<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AssetCommon
 *
 * @author Tierica
 */
class AssetCommon extends Eloquent {

    protected $table = 'asset_commons';

    protected function getAssetType() {
        return $this->asset_type;
    }

    public function getRelation() {
        $model = $this->getAssetType();

        return $this->belongsTo($model);
    }

}
