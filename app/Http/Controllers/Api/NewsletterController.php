<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index()
    {
        return response()->json(Newsletter::all());
    }

    public function show($id)
    {
        $newsletter = Newsletter::find($id);
        if (!$newsletter) {
            return response()->json(['message' => 'Newsletter not found'], 404);
        }
        return response()->json($newsletter);
    }
}
