<?php

namespace App\Http\Controllers\Api;

use App\Models\Culture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CultureResource;

class CultureController extends Controller
{
    public function index()
    {
        $cultures = Culture::with('category')->get();
        return CultureResource::collection($cultures);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'id_category' => 'required|exists:categories,id',
            'main_image' => 'nullable|string',
            'images' => 'nullable|string',
            'provincy' => 'nullable|string',
            'city' => 'nullable|string',
            'view_count' => 'nullable|integer',
            'is_popular' => 'nullable|boolean',
        ]);

        $culture = Culture::create($request->all());
        return new CultureResource($culture);
    }

    public function show($id)
    {
        $culture = Culture::with('category')->findOrFail($id);
        return new CultureResource($culture);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'id_category' => 'required|exists:categories,id',
            'main_image' => 'nullable|string',
            'images' => 'nullable|string',
            'provincy' => 'nullable|string',
            'city' => 'nullable|string',
            'view_count' => 'nullable|integer',
            'is_popular' => 'nullable|boolean',
        ]);

        $culture = Culture::findOrFail($id);
        $culture->update($request->all());
        return new CultureResource($culture);
    }

    public function destroy($id)
    {
        $culture = Culture::findOrFail($id);
        $culture->delete();
        return response()->json(['message' => 'Culture deleted successfully']);
    }
}
