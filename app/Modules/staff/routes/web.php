<?php
$moduleName = basename(dirname(__DIR__));
/**
 * Since Laravel 5.2 the StartSession middleware has been moved from the global $middleware list to the
 * web middleware group in App\Http\Kernel.php. That means that if you need
 * session access for your routes you can use that middleware group
 */
Route::namespace(getNamespaceController($moduleName))->middleware(['web'])->group(function() use($moduleName){
        // parents route
    Route::get('/test',function(){
        dd('testsssssssss');
    });
});
