<?php

namespace App\Http\Controllers\admin\vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    public function index(){
        return view( 'admin.layouts.app');
    }
}
