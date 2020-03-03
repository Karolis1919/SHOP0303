<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showAll(){

        return view('admininfo.pages.orders');
    }
}
