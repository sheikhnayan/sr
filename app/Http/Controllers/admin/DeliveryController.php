<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.delivery.delivery-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function checkout(Request $request)
    {
        return view('admin.delivery.delivery-checkout');
    }

    /**
     * Display the specified resource.
     */
    public function list()
    {
        return view('admin.delivery.delivery-list');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function order()
    {
        return view('admin.delivery.delivery-order');
    }

    /**
     * Update the specified resource in storage.
     */
    public function add_route()
    {
        return view('admin.delivery.delivery-route-add');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function add_route_number()
    {
        return view('admin.delivery.delivery-route-number-add');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function route()
    {
        return view('admin.delivery.delivery-route');
    }
}
