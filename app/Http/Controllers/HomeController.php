<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome()
    {
        // get all Categories
        $categories = Category::where('status', 1)->orderByDesc('id')->get();

        // get all Post :: lazy loading
        $posts = Post::with('category:id,name')->orderByDesc('id')->get();
        $lastetPost = $posts->first();
        $posts = $posts->skip(1)->take(4);

        // return to view
        return view("home", compact('categories', 'lastetPost', 'posts'));
    }


    //
}
