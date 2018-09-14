<?php


Route::prefix('panel')->group(function(){
    /* Route::any('usuarios','MiControlador@Usuarios'); */
    Route::match(['get','post'], '/', 'MiControlador@Usuarios');
    Route::match(['get','post','patch'], 'saludos', 'MiControlador@Usuarios')->name('panel.saludos');
});