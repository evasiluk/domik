<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\ShopFilter;

class ShopController extends Controller
{
    public function index(ShopFilter $filter)
    {
        $items = Item::filter($filter)->get();

        return view('shop', compact('items'));
    }
}
