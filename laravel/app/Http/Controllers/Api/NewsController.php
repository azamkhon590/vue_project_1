<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends BaseController
{
    public function index(){
        $news = News::query()->get();
        return $this->sendResponse("OK", $news);
    }
}
