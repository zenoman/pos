<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboard extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }
    function depan(){
        return view('dashboard\index');
    }
}
