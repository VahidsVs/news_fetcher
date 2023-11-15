<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\NewsJob;
use App\Models\ApiResource;
use App\Models\Category;
use App\Models\Post;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    //
    public function apiFetchNews()
    {
        $categories = Category::all();
        foreach ($categories as $category) 
        dispatch(new NewsJob($category->api_url.env('API_KEY_Gnews'),$category->id,"controller"));
    }
}
