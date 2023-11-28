<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\NewsJob;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    //
    public function apiFetchNews()
    {
        $categories = Category::whereIn('source',['api','rss'])->where('status',2);
        foreach ($categories as $category)
    {
        $apiURL=$category->parent_name=='news-gnews.io'?env('API_KEY_Gnews'):null;
        dispatch(new NewsJob($category->api_url.$apiURL,$category->id,$category->source_data_type,"controller"));
    }
    }
}
