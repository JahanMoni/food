<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Itemcontroller extends Controller
{
    public function item()
    {
        return view('backend.layouts.items.item');
    }
}
