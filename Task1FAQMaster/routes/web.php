<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome');

Auth::routes();

Route::get ( '/home', function () {
    return view ( 'home' );
} );
Route::any ( '/search', function () {
    $q = Input::get ( 'q' );
    $user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'welcome' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/menu','FAQMenuController@index');
Route::get('/menu', function (){
   return view('FAQMenu');
});
Route::post('/insert','FAQMenuController@insert');
Route::get('/menu','FAQMenuController@getData');
Route::get('/delete/{FaqID}', 'FAQMenuController@delete');
Route::get('/edit/{FaqID}', 'FAQMenuController@edit');
Route::get('/update/{FaqID}', 'FAQMenuController@update');



Route::get('/category','FAQCategoryController@index');
Route::get('/category', function (){
    return view('FAQCategory');
});

Route::post('/insertCat','FAQCategoryController@insertCat');
Route::get('/category','FAQCategoryController@getData');
Route::get('/deleteCat/{FaqID}', 'FAQCategoryController@deleteCat');
//Route::get('/update/{FaqID}', 'FAQMenuController@update');
