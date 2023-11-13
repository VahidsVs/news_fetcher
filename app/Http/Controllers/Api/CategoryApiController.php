<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ApiResource;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;

class CategoryApiController extends Controller
{
    //
    public function apiFetchCategories(Client $client)
    {
        try {
            $url = ApiResource::all()[0]->url; // orf.at
            $res = $client->get($url);
            $content = (string)$res->getBody();
            $content = str_replace('&', 'and', $content);
            $content = str_replace('dc:', '', $content);
            $content = str_replace('orfon:', '', $content);
            $xmlData = simplexml_load_string($content);
            $jsonData = json_decode(json_encode($xmlData))->item;

            foreach ($jsonData as $value) {
                Category::updateOrCreate(
                    ['parent_category_id' => 1, 'description' => $value->subject],
                    ['name' => $value->subject]
                );
            }
        } catch (Exception $e) {
            echo "Error Message Is: {$e->getMessage()}";
        }
    }
}
