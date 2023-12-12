<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Carbon\Carbon;
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
        $postsSection1 = Post::with('category:id,name')->where(['display' => 'section1', 'status' => 1])->get();

        // get all Categories news-gnews.io
        $categories = Category::where(['parent_name' => 'news-gnews.io', 'status' => 1])->orderBy('order')->get();

        // get all Post just category name is general :: lazy loading
        $posts = Post::with('category:id,name')->where(['category_id' => 1, 'status' => 1])->orderByDesc('id')->get();
        $lastetPost = $posts->first();
        $posts = $posts->skip(1)->take(6);

        // get all Post just category name is total :: lazy loading
        $postsKronenTotal = Post::with('category:id,name')->where(['category_id' => 9, 'status' => 1])->orderByDesc('id')->get()->take(12);

        // most liked
        $postsMostLiked = Post::with('publishedComments')->where('likes', '>', 0)->orderByDesc('likes')->get()->take(6);
        $postsMostLikedFooter =Post::with('publishedComments')->where('likes', '>', 0)->orderByDesc('likes')->get()->take(4);

        // return to view
        return view('home', compact('postsSection1', 'categories', 'lastetPost', 'posts', 'postsMostLiked', 'postsKronenTotal','postsMostLikedFooter')
        );
    }

    /**
     * show details post.
     */
    public function getPostDetails($id)
    {
        $postsMostLikedFooter = Post::with('publishedComments')->where('likes', '>', 0)->orderByDesc('likes')->get()->take(4);
        $post = Post::with(['category:id,name', 'user:id,username', 'publishedComments'])->where(['id' => $id, 'status' => 1])->first();
        return view("post-interior", compact('post','postsMostLikedFooter'));
    }

    /**
     * show all posts.
     */
    public function getAllPosts($id)
    {
        $postsMostLikedFooter = Post::with('publishedComments')->where('likes', '>', 0)->orderByDesc('likes')->get()->take(4);
        $allPosts = Post::with(['category:id,name', 'user:id,username', 'publishedComments'])
            ->where(['category_id' => $id, 'status' => 1])
            ->orderByDesc('id')
            ->paginate(12);
        return view('all-posts', compact('allPosts','postsMostLikedFooter'));
    }

    /**
     * like post.
     */
    public function likePost(Post $post)
    {
        $post->likes = (int)$post->likes + 1;
        $result = $post->save();
        $status = $result ? 'true' : 'false';
        return response()->json(['status' => $status]);
    }

    /**
     * unlike post.
     */
    public function unlikePost(Post $post)
    {
        $post->likes = (int)$post->likes - 1;
        $result = $post->save();
        $status = $result ? 'true' : 'false';
        return response()->json(['status' => $status]);
    }

    #region comment-ajax
    // public function commentPost(Request $request)
    // {
    //     $comment = comment::create($request->except('_token'));
    //     $status = $comment ? 'true' : 'false';
    //     return response()->json(['status' => $status]);
    // }
    #endregion ajax

    /**
     * show comment with fetch.
     */
    public function createComment(Post $post, Request $request)
    {
        $values = $request->validate(['comment' => ['required'], 'name' => 'required', 'email' => ['required', 'email'], 'website' => '']);
        $values['post_id'] = $post->id;
        $comment = Comment::create($values);
        $result = $comment ? true : false;
        return response()->json(['result' => $result]);
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
