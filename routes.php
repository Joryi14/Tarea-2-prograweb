<?php
 
  Route::get('/',function() { return view('Index1');});
  Route::get('book', 'booksController@index');
  Route::get('book/(:number)', 'booksController@show');
  Route::dispatch();
?>
