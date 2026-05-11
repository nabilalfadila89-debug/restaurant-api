<?php

namespace App\Http\Controllers;

use App\Models\FoodCategory;
use Illuminate\Http\Request;

class FoodCategoryController extends Controller
{
    public function index()
    {
        return FoodCategory::all();
    }

    public function store(Request $request)
    {
        return FoodCategory::create($request->all());
    }

    public function show(string $id)
    {
        return FoodCategory::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $foodCategory = FoodCategory::findOrFail($id);
        $foodCategory->update($request->all());

        return $foodCategory;
    }

    public function destroy(string $id)
    {
        FoodCategory::destroy($id);

        return response()->json([
            'message' => 'Deleted'
        ]);
    }
}