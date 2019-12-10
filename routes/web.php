<?php

Route::get('inicio', 'PagesController@inicio')->name('inicio');

Route::get('inicio/{id}', 'PagesController@detalle')->name('notas.detalle');

Route::get('fotos', 'PagesController@fotos')->name('foto');

Route::get('blog', 'PagesController@blog' )->name('noticias');

Route::get('nosotros/{nombre?}', 'PagesController@nosotros')->name('nosotros');

Route::post('inicio', 'PagesController@crear')->name('notas.crear');