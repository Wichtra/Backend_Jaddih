<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryManagementController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function store(Request $request)
    {
        $request->validate([
            'catName' => 'required|string|max:255',
        ]);

        $category = Category::create([
            'catName' => $request->catName,
        ]);

        return response()->json([
            'message' => 'Category created successfully',
            'category' => $category
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'catName' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id);

        $category->update([
            'catName' => $request->catName,
        ]);

        return response()->json([
            'message' => 'Category updated successfully',
            'category' => $category
        ], 200);
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return response()->json([
            'message' => 'Category deleted successfully'
        ], 200);
    }
}
