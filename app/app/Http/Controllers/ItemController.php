<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    function listItems(){
        $items = Item::all();
        return view('item.index', compact('items'));
    }
}
