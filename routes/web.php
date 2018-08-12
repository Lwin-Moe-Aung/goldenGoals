<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/phonebook',function(){
	return view('phonebook');
});

Route::get('/phonebook/{name}',function(){
	return redirect('/phonebook');
})->where('name','[A-Za-z]+');