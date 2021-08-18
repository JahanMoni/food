<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Customercontroller extends Controller
{
    public function customer()
    {
    return view('backend.layouts.customers.customer');
    
}
}
