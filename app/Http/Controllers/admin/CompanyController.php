<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Company::latest()->get();

        return view('admin.company.index',compact('data'));
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
        // dd($request->all());

        $imageName = time().'.'.$request->logo->extension();   

        $image = $request->logo->storeAs('public/company', $imageName);

        $image = str_replace('public','',$image);

        $add = new Company;
        $add->name = $request->name;
        $add->email = $request->email;
        $add->logo = $image;
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
        $data = Company::find($id);

        return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        if (isset($request->logo)) {
            $imageName = time().'.'.$request->logo->extension();   

            $image = $request->logo->storeAs('public/company', $imageName);
    
            $image = str_replace('public','',$image);
        }

        $update = Company::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        if (isset($request->logo)) {
            # code...
        $update->logo = $image;

        }
        $update->update();

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
