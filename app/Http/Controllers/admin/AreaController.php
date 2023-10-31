<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Upazila;
use App\Models\Union;
use App\Models\Bazar;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Bazar::all();

        $upazila = Upazila::all();

        $union = Union::all();

        return view("admin.area.index", compact("data","upazila","union"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $add = new Bazar;
        $add->name = $request->name;
        $add->upazila_id = $request->upazila_id;
        $add->union_id = $request->union_id;
        $add->save();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $add = Bazar::find($id);
        $add->name = $request->name;
        $add->upazila_id = $request->upazila_id;
        $add->union_id = $request->union_id;
        $add->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
