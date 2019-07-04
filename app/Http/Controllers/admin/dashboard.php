<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboard extends Controller
{
    function depan(){
        return view('admin\index');
    }
}
