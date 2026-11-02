<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurtainCategoryController;

Route::get('/', [CurtainCategoryController::class, 'index'])->name('home');
