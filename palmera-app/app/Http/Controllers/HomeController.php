<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
class HomeController extends Controller
{
   
    public function index()
    {
        $items =Item::Active()->limit(7)->get();
        $single =Item::Active()->Latest()->limit(7)->first();
        $latest =Item::Active()->Latest()->limit(7)->get();
        return view('home',compact('items','latest','single'));
    }
}
