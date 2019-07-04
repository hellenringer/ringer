<?php


Route::get('/', function () {
    return redirect(route('groups.index'));
});

Route::resource('groups', 'GroupsController');
//Route::get('/students', 'StudentsController@index')->name('students.index');