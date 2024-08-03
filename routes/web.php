<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $categories = Category::all();
    // dd($categories);
    return view('home', ['categories' => Category::all()]);
});
