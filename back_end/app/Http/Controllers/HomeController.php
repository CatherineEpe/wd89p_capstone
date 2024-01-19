<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        return view('example.index');
    }

    public function submitData(Request $request)
    {
        // Handle submitted data
        $data = $request->all();

        // Perform backend processing and return a response
        return response()->json(['message' => 'Data received successfully']);
    }
}
