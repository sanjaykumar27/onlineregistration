<?php

Route::get('/', 'Student\onlineRegistration@onlineRegistration');

Route::post('confirm', 'onlineregistration@confirm');
Route::post('store', 'onlineregistration@store');





