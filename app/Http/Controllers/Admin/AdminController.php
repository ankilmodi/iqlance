<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verify.admin'])->except('testFunc');
    }

    public function index()
    {
        return response()->json(['Hello World!'], 200);
    }

    public function testFunc()
    {
        return response()->json(['Public data'], 200);
    }
}
