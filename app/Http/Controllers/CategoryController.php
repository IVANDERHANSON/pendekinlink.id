<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAddCategory() {
        return view('addCategory');
    }

    public function storeCategory(Request $request) {
        $request->validate([
            'CategoryName' => ['required']
        ]);

        Category::create([
            'Name' => $request->CategoryName,
            'CreatedBy' => auth()->user()->id
        ]);

        return redirect('/history');
    }

    public function deleteCategory($id) {
        $category = Category::findOrFail($id);
        if ($category->CreatedBy != auth()->user()->id) {
            return abort(404);
        }
        $customizedLinks = $category->customizedLinks;
        foreach ($customizedLinks as $customizedLink) {
            $customizedLink->update([
                'CategoryId' => null
            ]);
        }
        $category->delete();
        return redirect('/history');
    }
}
