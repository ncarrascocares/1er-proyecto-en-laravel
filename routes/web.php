<?php

Route::get('inicio', 'PagesController@inicio')->name('inicio');

Route::get('inicio/detalle/{id}', 'PagesController@detalle')->name('notas.detalle');

Route::get('fotos', 'PagesController@fotos')->name('foto');

Route::get('blog', 'PagesController@blog' )->name('noticias');

Route::get('nosotros/{nombre?}', 'PagesController@nosotros')->name('nosotros');

Route::post('inicio', 'PagesController@crear')->name('notas.crear');

Route::get('inicio/editar/{id}', 'PagesController@editar')->name('notas.editar');
