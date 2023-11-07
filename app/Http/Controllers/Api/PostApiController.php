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
        $url = ApiResource::all()[0]->url;
        dispatch(new NewsJob($url,"controller")); // orf.at

    }
}
