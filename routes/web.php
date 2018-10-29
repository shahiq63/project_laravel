  <?php

Route::get('/','TasksController@index');

Route::get('/tasks/{task}','TasksController@ShowTask');

Route::get('customers','CustomersController@index');

Route::post('/posts/', 'TasksController@validateCredentials');

Route::get('/posts/create', function()
{
    return View::make('NewTask');
});
Route::get('newtask', function () {
  return view('NewTask');
});
Route::get('about', function () {
  return view('NewTask');
});