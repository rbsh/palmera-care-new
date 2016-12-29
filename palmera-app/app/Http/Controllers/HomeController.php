<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
class HomeController extends Controller
{
   
    public function index()
    {
        $items =Item::Active()->get();
        return view('home',compact('items'));
    }
}
