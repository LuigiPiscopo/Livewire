<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class , 'homepage'])->name('homepage');

Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');

Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

Route::get('/article/edit/{article}', [ ArticleController::class, 'edit'])->name('article.edit');