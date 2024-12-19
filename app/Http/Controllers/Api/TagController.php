<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return response()->json(Tag::all());
    }

    public function show($id)
    {
        $tag = Tag::find($id);
        if (!$tag) {
            return response()->json(['message' => 'Tag not found'], 404);
        }
        return response()->json($tag);
    }
}
