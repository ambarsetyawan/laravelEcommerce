<?php

Route::get("/", 'StoreController@index');
Route::get("admin/", function(){
   return view('home');
});
/*
Route::group(['prefix' => 'admin', 'where' => ['id' => '[0-9]+']],  function()
{
    Route::resource('categories', 'CategoriesController');
    Route::get('categories/{id}/delete', array(
        'as' => 'categories.delete',
        'uses' => 'CategoriesController@destroy'
    ));
    Route::resource('products', 'ProductsController');
    Route::get('products/{id}/delete', array(
        'as' => 'products.delete',
        'uses' => 'ProductsController@destroy'
    ));

    Route::group(['prefix' => 'images'], function(){
        //site.com.br/admin/products/images/{id}/product
        Route::get('{id}/product', ['as' => 'product.images', 'uses' => 'ProductsController@images']);
        Route::get('create/{id}/product', ['as' => 'product.images.create', 'uses' => 'ProductsController@createImage']);
        Route::post('store/{id}/product', ['as' => 'product.images.store', 'uses' => 'ProductsController@storeImage']);
        Route::get('destroy/{id}/image', ['as' => 'product.images.destroy', 'uses' => 'ProductsController@destroyImage']);
    });

});

*/


Route::group(['prefix' => 'admin',  'where' => ['id' => '[0-9]+']],  function()
{

    Route::group(['prefix' => 'categories'], function () {
        Route::get('', ['as' => 'admin.categories.index', 'uses' => 'CategoriesController@index']);
        Route::post('', ['as' => 'admin.categories.store', 'uses' => 'CategoriesController@store']);
        Route::get('create', ['as' => 'admin.categories.create', 'uses' => 'CategoriesController@create']);
        Route::get('{categories}', ['as' => 'admin.categories.show', 'uses' => 'CategoriesController@show']);
        Route::get('{categories}/edit', ['as' => 'admin.categories.edit', 'uses' => 'CategoriesController@edit']);
        Route::put('{categories}', ['as' => 'admin.categories.update', 'uses' => 'CategoriesController@update']);
        Route::get('categories/{id}/delete', ['as' => 'categories.delete', 'uses' => 'CategoriesController@destroy']);
    });

    Route::group(['prefix' => 'products'], function () {

        Route::get('', ['as' => 'admin.products.index', 'uses' => 'ProductsController@index']);
        Route::post('', ['as' => 'admin.products.store', 'uses' => 'ProductsController@store']);
        Route::get('create', ['as' => 'admin.products.create', 'uses' => 'ProductsController@create']);
        Route::get('{products}', ['as' => 'admin.products.show', 'uses' => 'ProductsController@show']);
        Route::get('{products}/edit', ['as' => 'admin.products.edit', 'uses' => 'ProductsController@edit']);
        Route::put('{products}', ['as' => 'admin.products.update', 'uses' => 'ProductsController@update']);
        Route::get('products/{id}/delete', ['as' => 'products.delete', 'uses' => 'ProductsController@destroy']);

            Route::group(['prefix' => 'images'], function () {

                Route::get('{id}/product', ['as' => 'product.images', 'uses' => 'ProductsController@images']);
                Route::get('create/{id}/product', ['as' => 'product.images.create', 'uses' => 'ProductsController@createImage']);
                Route::post('store/{id}/product', ['as' => 'product.images.store', 'uses' => 'ProductsController@storeImage']);
                Route::get('destroy/{id}/image', ['as' => 'product.images.destroy', 'uses' => 'ProductsController@destroyImage']);

             });

    });

});
