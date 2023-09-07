<?php

use App\Http\Controllers\Admin\blogController;
use App\Http\Controllers\Controller;
use App\Models\blogs;
use Illuminate\Support\Facades\Route;



Route::get('/',[Controller::class,'index']);
Route::get('/admin/add-blog',[blogController::class,'storePage']);
Route::post('/admin/add-blog',[blogController::class, 'store']);
Route::get('/admin/manage-blogs',[blogController::class,'manageBlog']);
Route::get('/admin/edit-blog',[blogController::class, 'edit']);
Route::put('/admin/update-blog',[blogController::class,'update']);
Route::delete('/admin/delete-blog',[blogController::class,'delete']);