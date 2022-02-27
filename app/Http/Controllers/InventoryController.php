<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    
    function stats(){
        return view('inventory.stats');
    }

}
