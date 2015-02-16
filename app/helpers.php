<?php
function cleanKeysFromInput()
{
    $propertyInputs = Input::all();
    
    unset($propertyInputs['_token']);
    unset($propertyInputs['_wysihtml5_mode']);
    
    return $propertyInputs;    
}

function cleanKeysFromColumns() {
    $columns = Schema::getColumnListing('villas');
    unset($columns['created_at']);
    unset($columns['updated_at']);
    unset($columns['id']);
    
    return $columns;
}
?>