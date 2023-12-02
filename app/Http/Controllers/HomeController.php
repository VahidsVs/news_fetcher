<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Show latest post and popular posts.
     */
    public function showHome()
    {
        // get all trending posts
        $postsSection1 = Post::where('display', 'section1')->with('category:id,name')->get();
        $postsSection2 = Post::where('display', 'section2')->with('category:id,name')->get();
        $postsSection3 = Post::where('display', 'section3')->with('category:id,name')->get();

        // get all Categories news-gnews.io
        $categories = Category::where(['parent_name' => 'news-gnews.io', 'status' => 1])->orderBy('order')->get();
        // dd($categories);

        // get all Post just category name is general :: lazy loading
        $posts = Post::with('category:id,name')->where(['category_id' => 1, 'status' => 1])->orderByDesc('id')->get();
        $lastetPost = $posts->first();
        $posts = $posts->skip(1)->take(6);

        // get all Post just category name is total :: lazy loading
        // $posts = Post::where(['category_id' => 9, 'status' => 1])->with('category:id,name')->orderByDesc('id')->get();

        // post populars
        $popularPosts = Post::where(['display' => 'section4', 'status' => 1])->get();

        // return to view
        return view(
            "home",
            compact('postsSection1', 'postsSection2', 'postsSection3', 'categories', 'lastetPost', 'posts', 'popularPosts')
        );
    }

    /**
     * show details post.
     */
    public function getPostDetails($id)
    {
        $post = Post::with(['category:id,name', 'user:id,username'])->where('id', $id)->first();
        return view("post-interior", compact('post'));
    }

    /**
     * like post.
     */
    public function likePost(Post $post)
    {
        $post->likes = (int)$post->likes + 1;
        $result = $post->save();
        if ($result)
            return response()->json(['status' => true]);
        else
            return response()->json(['status' => false]);

        // return Redirect::back()->withErrors(['swal-success' => 'Successfully registered']);
    }

    /**
     * unlike post.
     */
    public function unlikePost(Post $post)
    {
        $post->likes = (int)$post->likes - 1;
        $result = $post->save();
        if ($result)
            return response()->json(['status' => true]);
        else
            return response()->json(['status' => false]);
    }

    /**
     * Show specific post.
     */
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
