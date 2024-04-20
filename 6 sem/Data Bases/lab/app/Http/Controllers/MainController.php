<?php

namespace App\Http\Controllers;

use App\Models\DBGetTestInfo;
use App\Models\Disk;
use Illuminate\DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showmain(){
        return view('layouts.main');
    }

}   
