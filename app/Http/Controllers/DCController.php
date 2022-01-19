<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DCController extends Controller
{
public function show($num)
{
    $dett_com = config('comics');
    $date_format = $dett_com[$num]['sale_date'];
    $date_format = date("M d y");
    
    return view('dett_comics',compact('num','dett_com','date_format'));
}
}
