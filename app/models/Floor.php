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
class Floor extends Eloquent {    
    protected $table = 'office_floors';
    protected $guarded = ['id', 'created_at', 'updated_at'];
                   
}
