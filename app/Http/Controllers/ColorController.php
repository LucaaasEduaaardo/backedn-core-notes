<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Http\Resources\ColorResource;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        return ColorResource::collection(Color::all());
    }

    public function store(Request $request)
    {
        $color = Color::create($request->all());
        return new ColorResource($color);
    }

    public function show($id)
    {
        return new ColorResource(Color::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $color = Color::findOrFail($id);
        $color->update($request->all());
        return new ColorResource($color);
    }

    public function destroy($id)
    {
        $color = Color::findOrFail($id);
        $color->delete();
        return response()->json(null, 204);
    }

    public function firstColor()
    {
        $color = Color::orderBy('id', 'asc')->first();

        if (!$color) {
            return response()->json(['error' => 'No colors found'], 404);
        }

        return response()->json(['color' => $color], 200);
    }
}
