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
        $categories = Category::where('status', 1)->orderBy('order')->get();

        // get all Post :: lazy loading
        $posts = Post::where('category_id',1)->with('category:id,name')->orderByDesc('id')->get();
        $lastetPost = $posts->first();
        $posts = $posts->skip(1)->take(6);
        
        // return to view
        return view("home", compact('categories', 'lastetPost', 'posts'));
    }


    //
}
