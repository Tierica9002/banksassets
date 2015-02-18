<?php

function cleanKeysFromInput() {
    $propertyInputs = Input::all();

    unset($propertyInputs['_token']);
    unset($propertyInputs['_wysihtml5_mode']);

    return $propertyInputs;
}

function cleanKeysFromColumns($table) {
    $columns = Schema::getColumnListing($table);

    if (($key = array_search('created_at', $columns)) !== false) {
        unset($columns[$key]);
    }
    if (($key = array_search('updated_at', $columns)) !== false) {
        unset($columns[$key]);
    }
    if (($key = array_search('id', $columns)) !== false) {
        unset($columns[$key]);
    }      
    return $columns;
}

?>