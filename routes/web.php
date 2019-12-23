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
Route::get( '/', function () {
	return view( 'master' );
} );

Route::group( [ 'prefix' => '/admin' ], function () {

	Route::prefix( 'products' )->group( function () {
		Route::get( '/', 'admin\ProductsController@index' )->name( 'admin.product.index' );
		Route::get( '/create', 'admin\ProductsController@create' )->name( 'admin.product.create' );
		Route::post( '/store', 'admin\ProductsController@store' )->name( 'admin.product.store' );
		Route::get( '/{product}/show', 'admin\ProductsController@show' )->name( 'admin.product.show' );
		Route::get( '/{product}/edit', 'admin\ProductsController@edit' )->name( 'admin.product.edit' );
		Route::put( '/{product}/update', 'admin\ProductsController@update' )->name( 'admin.product.update' );
		Route::delete( '/{product}/delete', 'admin\ProductsController@delete' )->name( 'admin.product.delete') ;
	    Route::post('product/search','admin\ProductsController@search' )->name('admin.product.search');

} );
	Route::prefix( 'categories' )->group( function () {
		Route::get( '/', 'admin\CategoriesController@index' )->name( 'admin.category.index' );
		Route::get( '/create', 'admin\CategoriesController@create' )->name( 'admin.category.create' );
		Route::post( '/store', 'admin\CategoriesController@store' )->name( 'admin.category.store' );
		Route::get( '/{category}/show', 'admin\CategoriesController@show' )->name( 'admin.category.show' );
		Route::get( '/{category}/edit', 'admin\CategoriesController@edit' )->name( 'admin.category.edit' );
		Route::put( '/{category}/update', 'admin\CategoriesController@update' )->name( 'admin.category.update' );
		Route::delete( '/{category}/delete', 'admin\CategoriesController@delete' )->name( 'admin.category.delete') ;
	    Route::post('category/search','admin\CategoriesController@search' )->name('admin.category.search');
} );
} );
//users
Route::group( [ 'prefix' => '/user' ], function () {
	//router for users
	Route::group( [ 'prefix' => '/product' ], function () {
		//router for users
		Route::get('/' ,'user\ProductsController@index')->name('product.index');
        Route::post('user/search','user\ProductsController@search' )->name('user.search');
	} );
	Route::group( [ 'prefix' => '/cart' ], function () {
		//router for users
		Route::any('/store/{product}' ,'user\CartsController@store')->name('cart.store');
	} );
} );
/*
Route::get('/', function () {
    return view('master');
});

//Routes Of products
Route::get('indexp','productsController@index')->name('admin.products.index');
Route::get('products/{show}','productsController@show' )->name('admin.products.show');
Route::get('createp','productsController@create')->name('admin.products.create');
Route::post('storep','productsController@store')->name('admin.products.store');
Route::get('product/{product}/editp','productsController@edit')->name('admin.products.edit');
Route::post('product/{product}/updatep','productsController@update')->name('admin.products.update');
Route::get('product/{product}/delete','productsController@delete')->name('admin.products.delete');
Route::post('product/search','productsController@search' )->name('admin.products.search');


//Routes Of categories
Route::get('index','categoriesController@index')->name('admin.category.index');
Route::get('category/{show}','categoriesController@show' )->name('admin.category.show');
Route::get('create','categoriesController@create')->name('admin.category.create');
Route::post('store','categoriesController@store')->name('admin.category.store');
Route::get('category/{category}/edit','categoriesController@edit')->name('admin.category.edit');
Route::post('category/{category}/update','categoriesController@update')->name('admin.category.update');
Route::get('category/{category}/delete','categoriesController@delete')->name('admin.category.delete');
Route::post('category/search','categoriesController@search' )->name('admin.category.search');


//Route Of user
Route::get('userp' ,'productsController@index')->name('product.index');
Route::post('user/search','productsController@search' )->name('user.search');

//Route Of Cart
Route::any('store/{product}' ,'cartsController@store')->name('cart.store');

*/

