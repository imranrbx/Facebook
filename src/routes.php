<?php

Route::get('/facebook', function(){
	return FBM::getCreds();
});

Route::get('/fbcontroller', 'Imranrbx\Facebook\Controllers\FacebookController@index');
