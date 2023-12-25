<?php

use App\Livewire\Calculator;
use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\ShowPosts;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

Route::get('/todos', Todos::class);
Route::get('/calculator', Calculator::class);
Route::get('/counter', Counter::class);
Route::get('/posts', ShowPosts::class);
Route::get('/create-post', CreatePost::class);
