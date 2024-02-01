<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuControl extends Controller
{
    public function index() {
       
        return view('welcome', [
            'menu' => Menu::first()
        ]);
    }
    

    public function show()
   {
       return view('menu', [
           'menu' => Menu::where('slug', '=', 'a')->first()
       ]);
   }
}
