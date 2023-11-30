<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome()
    {
        // get all trending posts
        $postsSection1 = Post::where('display', 'section1')->with('category:id,name')->get();
        $postsSection2 = Post::where('display', 'section2')->with('category:id,name')->get();
        $postsSection3 = Post::where('display', 'section3')->with('category:id,name')->get();

        // get all Categories
        $categories = Category::where(['parent_name' => 'news-gnews.io', 'status' => 1])->orderBy('order')->get();
        // dd($categories);

        // get all Post :: lazy loading
        $posts = Post::where('category_id', 1)->with('category:id,name')->orderByDesc('id')->get();
        $lastetPost = $posts->first();
        $posts = $posts->skip(1)->take(6);

        // post populars
        $popularPosts = Post::where('display', 'section4')->get();

        // return to view
        return view(
            "home",
            compact('postsSection1', 'postsSection2', 'postsSection3', 'categories', 'lastetPost', 'posts', 'popularPosts')
        );
    }
    public function getPostDetails(Post $post)
    {
    }
    public function getPostsByCategory(Category $category)
    {
        // post back section whats new
        $posts = Post::where('category_id', $category->id)->with('category:id,name')->orderByDesc('id')->get();
        $lastetPost = $posts->first();
        $posts = $posts->skip(1)->take(6);

        // return to view
        return view("home-sections.whats-new-posts", compact('lastetPost', 'posts'));
    }
}
