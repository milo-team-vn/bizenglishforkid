<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

use App\Http\Controllers\Admin\PagesCrudController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('category', 'CategoryCrudController');
    Route::crud('tags', 'TagsCrudController');
    Route::crud('post', 'PostCrudController');
    Route::crud('course', 'CourseCrudController');
    Route::crud('customer', 'CustomerCrudController');
    Route::crud('prolife', 'ProlifeCrudController');
    Route::crud('cofig', 'CofigCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('page', 'PageCrudController');
    Route::crud('comment', 'CommentCrudController');
    Route::crud('option', 'OptionCrudController');
    Route::get("/page/edit/{type}",[PagesCrudController::class,'index','type'])->where(['type'])->name("show.page.edit");
    Route::post("/page/save/{type}",[PagesCrudController::class,'store','type'])->where(['type'])->name("page.store");
}); // this should be the absolute last line of this file

