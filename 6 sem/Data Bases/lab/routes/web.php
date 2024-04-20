<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiskController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CreateController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', "App\Http\Controllers\MainController@showmain")->name('main.index');


Route::get('/additions', "App\Http\Controllers\IndexController@indexAdditions")->name('addition.index');
Route::get('/additions/create', "App\Http\Controllers\CreateController@createAdditions")->name('addition.create');
Route::post('/additions', "App\Http\Controllers\StoreController@storeAdditions")->name('addition.store');
Route::get('/additions/{additions}', "App\Http\Controllers\ShowController@showAdditions")->name('addition.show'); 
Route::get('/additions/{additions}/edit', "App\Http\Controllers\EditController@editAdditions")->name('addition.edit'); 
Route::patch('/additions/{additions}', "App\Http\Controllers\UpdateController@updateAdditions")->name('addition.update');   
Route::delete('/additions/{additions}', "App\Http\Controllers\DeleteController@destroyAdditions")->name('addition.delete'); 


Route::get('/client', "App\Http\Controllers\IndexController@indexClient")->name('client.index');
Route::get('/client/create', "App\Http\Controllers\CreateController@createClient")->name('client.create');
Route::post('/client', "App\Http\Controllers\StoreController@storeClient")->name('client.store');
Route::get('/client/{client}', "App\Http\Controllers\ShowController@showClient")->name('client.show'); 
Route::get('/client/{client}/edit', "App\Http\Controllers\EditController@editClient")->name('client.edit'); 
Route::patch('/client/{client}', "App\Http\Controllers\UpdateController@updateClient")->name('client.update');   
Route::delete('/client/{client}', "App\Http\Controllers\DeleteController@destroyClient")->name('client.delete'); 


Route::get('/comments', "App\Http\Controllers\IndexController@indexComments")->name('comment.index');
Route::get('/comments/create', "App\Http\Controllers\CreateController@createComments")->name('comment.create');
Route::post('/comments', "App\Http\Controllers\StoreController@storeComments")->name('comment.store');
Route::get('/comments/{comments}', "App\Http\Controllers\ShowController@showComments")->name('comment.show'); 
Route::get('/comments/{comments}/edit', "App\Http\Controllers\EditController@editComments")->name('comment.edit'); 
Route::patch('/comments/{comments}', "App\Http\Controllers\UpdateController@updateComments")->name('comment.update');   
Route::delete('/comments/{comments}', "App\Http\Controllers\DeleteController@destroyComments")->name('comment.delete'); 


Route::get('/delivery', "App\Http\Controllers\IndexController@indexDelivery")->name('delivery.index');
Route::get('/delivery/create', "App\Http\Controllers\CreateController@createDelivery")->name('delivery.create');
Route::post('/delivery', "App\Http\Controllers\StoreController@storeDelivery")->name('delivery.store');
Route::get('/delivery/{delivery}', "App\Http\Controllers\ShowController@showDelivery")->name('delivery.show'); 
Route::get('/delivery/{delivery}/edit', "App\Http\Controllers\EditController@editDelivery")->name('delivery.edit'); 
Route::patch('/delivery/{delivery}', "App\Http\Controllers\UpdateController@updateDelivery")->name('delivery.update');   
Route::delete('/delivery/{delivery}', "App\Http\Controllers\DeleteController@destroyDelivery")->name('delivery.delete'); 


Route::get('/order', "App\Http\Controllers\IndexController@indexOrder")->name('order.index');
Route::get('/order/create', "App\Http\Controllers\CreateController@createOrder")->name('order.create');
Route::post('/order', "App\Http\Controllers\StoreController@storeOrder")->name('order.store');
Route::get('/order/{order}', "App\Http\Controllers\ShowController@showOrder")->name('order.show'); 
Route::get('/order/{order}/edit', "App\Http\Controllers\EditController@editOrder")->name('order.edit'); 
Route::patch('/order/{order}', "App\Http\Controllers\UpdateController@updateOrder")->name('order.update');   
Route::delete('/order/{order}', "App\Http\Controllers\DeleteController@destroyOrder")->name('order.delete'); 


Route::get('/passport', "App\Http\Controllers\IndexController@indexPassport")->name('passport.index');
Route::get('/passport/create', "App\Http\Controllers\CreateController@createPassport")->name('passport.create');
Route::post('/passport', "App\Http\Controllers\StoreController@storePassport")->name('passport.store');
Route::get('/passport/{passport}', "App\Http\Controllers\ShowController@showPassport")->name('passport.show'); 
Route::get('/passport/{passport}/edit', "App\Http\Controllers\EditController@editPassport")->name('passport.edit'); 
Route::patch('/passport/{passport}', "App\Http\Controllers\UpdateController@updatePassport")->name('passport.update');   
Route::delete('/passport/{passport}', "App\Http\Controllers\DeleteController@destroyPassport")->name('passport.delete'); 


Route::get('/disk', "App\Http\Controllers\IndexController@indexDisk")->name('disk.index');
Route::get('/disk/create', "App\Http\Controllers\CreateController@createDisk")->name('disk.create');
Route::post('/disk', "App\Http\Controllers\StoreController@storeDisk")->name('disk.store');
Route::get('/disk/{disk}', "App\Http\Controllers\ShowController@showDisk")->name('disk.show'); 
Route::get('/disk/{disk}/edit', "App\Http\Controllers\EditController@editDisk")->name('disk.edit'); 
Route::patch('/disk/{disk}', "App\Http\Controllers\UpdateController@updateDisk")->name('disk.update');   
Route::delete('/disk/{disk}', "App\Http\Controllers\DeleteController@destroyDisk")->name('disk.delete'); 

Route::get('/lab4', "App\Http\Controllers\Lab4Controller@lab4index")->name('lab4.index');
Route::get('/lab5', "App\Http\Controllers\Lab5Controller@lab5index")->name('lab5.index');