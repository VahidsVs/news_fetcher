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
        $categories = Category::whereIn('source', ['api', 'rss'])->where('status', 1);
        foreach ($categories as $item) {
            $apiKey = $item->parent_name == 'news-gnews.io' ? env('API_KEY_Gnews') : null;
            dispatch(new NewsJob($item->api_url . $apiKey, $item->source_data_type, $item->parent_name, $item->id, "controller"));
        }
    }
}
