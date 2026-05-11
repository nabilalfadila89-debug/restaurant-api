<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    public function index()
    {
        return MenuItem::with('foodCategory')->get();
    }

    public function store(Request $request)
    {
        return MenuItem::create($request->all());
    }

    public function show(string $id)
    {
        return MenuItem::with('foodCategory')->findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $menuItem = MenuItem::findOrFail($id);
        $menuItem->update($request->all());

        return $menuItem;
    }

    public function destroy(string $id)
    {
        MenuItem::destroy($id);

        return response()->json([
            'message' => 'Deleted'
        ]);
    }
}