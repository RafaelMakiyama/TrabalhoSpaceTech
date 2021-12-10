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

    function show($id){
        $item = Item::find($id);

        if(!$item){
            return redirect()->route('items.index');
        }
        
       return view('item.show',compact('item'));
    }

}
