<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = Company::all();

        $data = Product::all();

        $category = Category::get();

        return view('admin.product.index',compact('company','category','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function category(Request $request)
    {
        $slug = str_replace(' ','_',$request->name);

        $check = Category::where('slug',$slug)->get();

        if (count($check) > 0) {
            # code...
            $random = mt_rand(1,999999);

            $slug = $slug.$random;
        }


        $add = new Category;
        $add->name = $request->name;
        $add->slug = $slug;
        $add->save();

        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $imageName = time().'.'.$request->photo->extension();

        $image = $request->photo->storeAs('public/product', $imageName);

        $image = str_replace('public','',$image);


        $add = new Product;
        $add->name = $request->name;
        $add->photo = $image;
        $add->category_id = $request->category_id;
        $add->piece_per_box = $request->piece_per_box;
        $add->box_type = $request->box_type;
        $add->buying_rate = $request->buying_rate;
        $add->profit_margin = $request->profit_margin;
        $add->company_id = $request->company_id;
        $add->stock = $request->stock;
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
        if (isset($request->photo)) {
            $imageName = time().'.'.$request->logo->extension();

            $image = $request->photo->storeAs('public/product', $imageName);

            $image = str_replace('public','',$image);
        }

        $data = Product::find($id);
        $data->name = $request->name;
        if (isset($request->photo)) {
            $data->photo = $image;
        }
        $data->category_id = $request->category_id;
        $data->piece_per_box = $request->piece_per_box;
        $data->box_type = $request->box_type;
        $data->buying_rate = $request->buying_rate;
        $data->profit_margin = $request->profit_margin;
        $data->company_id = $request->company_id;
        $data->stock = $request->stock;
        $data->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function category_delete(string $id)
    {
        //
        $find = Category::find($id);


    }
}
