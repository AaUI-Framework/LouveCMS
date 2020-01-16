<?php

namespace App\Http\Controllers\admin\content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return response()->json([
            'html' => View('admin.home')->render(),
            'title' => 'Dashboard'
        ]);
    }
    public function posts() {
        return response()->json([
            'html' => View('admin.pages.posts')->render(),
            'title' => 'Posts '
        ]);
    }
}
