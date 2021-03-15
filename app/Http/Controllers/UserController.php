<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
//        return $request->path();
//        return $request->Url();
        return $request->fullUrl();

    }
}
