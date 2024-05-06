<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\PostModel;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.home');
    }

    public function aboutUs()
    {
        $category = CategoryModel::where('key', config('category.list_categories.about_us.key'))
            ->firstOrFail();

        $post = PostModel::where('category_id', $category->id)
            ->firstOrFail();

        return view('client.about_us')
            ->with('post', $post);
    }

    public function contact()
    {

        return view('client.contact');
    }
}
