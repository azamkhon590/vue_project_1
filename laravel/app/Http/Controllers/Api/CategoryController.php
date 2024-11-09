<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends BaseController
{
    public function index(){
        $categories = Category::query()->get();
        return $this->sendResponse("OK", $categories);
    }
}
