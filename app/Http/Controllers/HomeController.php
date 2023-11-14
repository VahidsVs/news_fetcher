<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome()
    {
        // Whats New
        $categories = Category::where('status', 1)->orderByDesc('id')->get();
        return view("home", compact('categories'));
    }


    //
}
