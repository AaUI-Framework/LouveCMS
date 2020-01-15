<?php

namespace App\Http\Controllers\admin\content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return response(view('admin.home'));
    }
    public function posts() {
        return response(view('admin.pages.posts'));
    }
}
