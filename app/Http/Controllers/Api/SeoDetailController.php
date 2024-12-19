<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SeoDetail;
use Illuminate\Http\Request;

class SeoDetailController extends Controller
{
    public function index()
    {
        return response()->json(SeoDetail::all());
    }

    public function show($id)
    {
        $seoDetail = SeoDetail::find($id);
        if (!$seoDetail) {
            return response()->json(['message' => 'SEO Detail not found'], 404);
        }
        return response()->json($seoDetail);
    }
}
