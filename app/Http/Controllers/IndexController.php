<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // resources/js/Pages/Index
    public function index() {
        return inertia('Index/Index',
    [
        "message" => "Hellow from Laravel"
    ]);
    }
    public function show() {
        return inertia('Index/Show');
    }
}
