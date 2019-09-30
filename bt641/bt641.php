<?php

Route::group(['prefix'=>'/student'],function(){
	Route::get('/view', 'bt641Controller@viewStudent')->name('viewhome');
	Route::post('/post', 'bt641Controller@inputStudent')->name('viewPost');
	Route::get('/show', 'bt641Controller@display')->name('viewDisplay');

	Route::delete('/show/{id}', 'bt641Controller@destroy')->name('nieuws.destroy');


});