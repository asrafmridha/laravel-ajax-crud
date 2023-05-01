<?php

namespace App\Http\Controllers;

use App\Models\AxoisTest;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index()
    {
        return view('axoisFormdata');
    }

    public function store(Request $request)
    {
        AxoisTest::create($request->all());
        return "Success";
    }
}
