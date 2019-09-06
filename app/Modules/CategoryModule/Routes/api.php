<?php 
 
$namespace = 'CategoryModule\Http\Controllers\api';

Route::group([
    'prefix'        => 'api',
    'namespace'     => $namespace,  
    'middleware'    => 'auth:api'
], function() {
    Route::resource('categories', 'CategoryController')->only([
        'create', 'store', 'update', 'destroy', 'index'
    ]);
});