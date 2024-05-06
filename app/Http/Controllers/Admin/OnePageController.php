<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\PostModel;
use Illuminate\Http\Request;

class OnePageController extends Controller
{
    public function aboutUs()
    {
        $category = CategoryModel::where('key', config('category.list_categories.about_us.key'))
            ->firstOrFail();

        $post = PostModel::where('category_id',$category->id)
            ->first();

        return view('admin.one_page.about_us')
            ->with('post', $post);
    }

    public function aboutUsStore(Request $request)
    {
        if ($request->get('contents')) {
            $category = CategoryModel::where('key', config('category.list_categories.about_us.key'))
                ->firstOrFail();

            PostModel::updateOrCreate([
                'category_id' => $category->id,
            ], [
                'title' => $category->key,
                'contents' => $request->get('contents'),
            ]);
        }

        return redirect()->back()->with('success', 'Cập nhật bài viết thành công');
    }


}
