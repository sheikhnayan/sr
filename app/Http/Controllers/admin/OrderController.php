<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function order_page()
    {
        return view('admin.order.order_page');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function retailer_order_profile()
    {
        //

        return view('admin.order.retailer_order_profile');
    }

}
