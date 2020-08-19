<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('/', function () {
//     return view('page/home');
// });


Route::get('/', [
    'as' => 'home',
    'uses' => 'PageController@getIndex'
]);

Route::get('profile', [
    'as' => 'profile',
    'uses' => 'PageController@getLastComments'
]);

Route::get('products/type-{type}', [
    'as' => 'type-product',
    'uses' => 'PageController@getProductByType'
]);

Route::get('about-us', function () {
    return view('page.about-us');
});

Route::get('favorite-tour', [
    'as' => 'favorite-tour',
    'uses' => 'PageController@getFavoriteTour'
]);

Route::get('products', [
    'as' => 'product',
    'uses' => 'PageController@getProduct'
]);

Route::get('products/ord-by-name', [
    'as' => 'ord-by-name',
    'uses' => 'PageController@getProductByName'
]);

Route::get('products/ord-by-price', [
    'as' => 'ord-by-price',
    'uses' => 'PageController@getProductByPrice'
]);

Route::get('products/ordered-a-lot', [
    'as' => 'ordered-a-lot',
    'uses' => 'PageController@getProductByOrderedALot'
]);

Route::get('products-detail/{id}', [
    'as' => 'product-detail',
    'uses' => 'PageController@getProductById'
]);

Route::get('products/{id}/ord-by-name', [
    'as' => 'ord-by-name',
    'uses' => 'PageController@getProductByName'
]);

Route::get('products/{id}/ord-by-price', [
    'as' => 'ord-by-price',
    'uses' => 'PageController@getProductByName'
]);

Route::get('products/{id}/ordered-a-lot', [
    'as' => 'ordered-a-lot',
    'uses' => 'PageController@getProductByOrderedALot'
]);

Route::get('news',[
    'as' => 'news',
    'uses' => 'PageController@getNews'
]);


Route::get('news/{id}',[
    'as' => 'news',
    'uses' => 'PageController@getNewsById'
]);

Route::get('search',[
    'as' => 'search',
    'uses' => 'PageController@getProductBySearch'
]);

Route::get('contact',[
    'as' => 'contact',
    'uses' => 'PageController@getContact'
]);

Route::post('manage/contact/update/{id}', [
    'as' => 'update-contacts',
    'uses' => 'PageController@editContact'
]);

Route::get('book-tour-histories', function () {
    return view('page/book-tour-histories');
});

Route::get('chat-with-admin', function () {
    return view('page/chat-with-admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('comment/{id}',[
	'as'=>'comment',
	'uses'=>'PageController@postComment'
]);

Route::post('delete-comment/{id}',[
	'as'=>'delete-comment',
	'uses'=>'PageController@deleteComment'
]);

Route::post('add-to-favorite/{id}',[
	'as'=>'add-to-favorite',
	'uses'=>'PageController@addToFavorite'
]);

Route::post('remove-favorite/{id}',[
	'as'=>'remove-favorite',
	'uses'=>'PageController@deleteFavorite'
]);

Route::get('book-tour-histories/{id}',[
    'as'=>'bookTour',
    'uses'=>'PageController@getBookTour'
]);

Route::post('book-tour-histories/{id}',[
'as'=>'bookTour',
'uses'=>'PageController@postBookTour'
]);

Route::get('tours',[
    'as' => 'tours',
    'uses' => 'PageController@getOrderedTour'
]);

Route::post('cancel-tour/{id}',[
	'as'=>'cancel-tour',
	'uses'=>'PageController@cancelTour'
]);

//Admin

Route::get('/use-as-admin', [
    'as' => 'admin',
    'uses' => 'PageController@getAdmin'
]);

Route::get('manage/tours/viewTour',[
	'as'=>'viewTour',
	'uses'=>'tourController@getList'
]);

Route::get('manage/tours/tour-ordered-management',[
	'as'=>'tourOrdered',
	'uses'=>'PageController@getTourOrdered'
]);

Route::get('manage/contact/',[
	'as'=>'modify-contact',
	'uses'=>'PageController@getContactToEdit'
]);

Route::get('manage/users',[
	'as'=>'user',
	'uses'=>'tourController@getListUser'
]);

Route::get('manage/tours/addTour', [
    'as' => 'addTour',
    'uses' => 'tourController@getAdd'
]);

Route::post('manage/tours/addTour', [
    'as' => 'addTour',
    'uses' => 'tourController@addTour'
]);



Route::get('manage/tours', [
    'as' => 'tour',
    'uses' => 'tourController@getTour'
]);

Route::post('manage/tours/{id}',[
	'as'=>'tour',
	'uses'=>'tourController@postTour'
]);

Route::post('manage/tours/delete-tour/{id}',[
	'as'=>'delete-tour',
	'uses'=>'tourController@deleteTour'
]);

Route::get('manage/tours/updateTour/{id}', [
    'as' => 'editTour',
    'uses' => 'tourController@editForm'
]);


Route::post('manage/tours/updateTour/{id}', [
    'as' => 'editTour',
    'uses' => 'tourController@editTour'
]);

Route::post('manage/tours/user/{id}', [
    'as'=> 'delete-user',
    'uses'=> 'tourController@deleteUser'
]);

Route::post('manage/tours/{id}',[
	'as'=>'change-status',
	'uses'=>'PageController@postChangeStatus'
]);

Route::post('manage/users/{id}',[
	'as'=>'change-role',
	'uses'=>'PageController@postChangeRole'
]);

Route::get('new',[
	'as'=>'new',
	'uses'=>'tourController@getListNew'
]);

Route::post('new/{id}', [
    'as'=> 'delete-new',
    'uses'=> 'tourController@deleteNew'
]);

Route::get('postNew', [
    'as' => 'postNew',
    'uses' => 'tourController@getAddNew'
]);

Route::post('postNew', [
    'as' => 'postNew',
    'uses' => 'tourController@postNew'
]);

Route::get('updateNew/{id}', [
    'as' => 'editNew',
    'uses' => 'tourController@editFormNew'
]);

Route::post('updateNew/{id}', [
    'as' => 'editNew',
    'uses' => 'tourController@editNew'
]);

