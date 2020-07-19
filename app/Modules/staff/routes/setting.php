<?php
Route::resource('sector','SectorController')->except('show','destroy');
Route::post('sector/destroy','SectorController@destroy')->name('sector.destroy');
