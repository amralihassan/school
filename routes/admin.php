<?php
Route::group(['prefix' => 'admin','namespace' => 'Admin'],function(){
    // ========================================= CONFIGURATIONS ======================================
        Config::set('auth.defaults.guard','admin');
        Config::set('auth.defaults.passwords','users');
    // ========================================= END CONFIGURATIONS ==================================
    // ========================================= LOGIN ===============================================
    Route::get('/login','AdminAuth@login');
    Route::post('/login','AdminAuth@setLogin')->name('setLogin');

});
