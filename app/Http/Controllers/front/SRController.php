<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Union;
use App\Models\Bazar;
use App\Models\Route;
use App\Models\Retailer;
use Auth;

class SRController extends Controller
{
    public function index(){
        return view('front.sr.home');
    }

    public function summary(){
        return view('front.sr.summary');
    }

    public function retailer(){
        $union = Union::all();

        $data = Retailer::where('user_id',Auth::user()->id)->get();

        return view('front.sr.retailer',compact('union','data'));
    }

    public function check_retailer($val)
    {
        $check = Retailer::where('phone',$val)->count();

        if($check == 0){
            $data = 0;
        }else {
            $data = Retailer::where('phone',$val)->first();
        };

        return $data;
    }

    public function route(){

        $union = Union::all();

        $data = Route::where('user_id',Auth::user()->id)->get();

        return view('front.sr.route',compact('union','data'));
    }

    public function route_store(Request $request)
    {
        $add = new Route;
        $add->union_id = $request->union_id;
        $add->day = $request->day;
        $add->bazar_id = $request->bazar_id;
        $add->user_id = Auth::user()->id;
        $add->save();

        return back();
    }

    public function route_by_day($day){

        $union = Union::all();

        $bazar = Bazar::all();

        $data = Route::where('user_id',Auth::user()->id)->where('day',$day)->get();

        return view('front.sr.route-day',compact('data','union','bazar','day'));
    }

    public function retailer_store(Request $request)
    {
        $imageName = time().'.'.$request->photo->extension();

        $image = $request->photo->storeAs('public/retailer', $imageName);

        $image = str_replace('public','',$image);

        $percentage = 0;

        if ($request->name != null) {
            # code...
            $percentage += 10;
        }
        if ($request->phone != null) {
            # code...
            $percentage += 10;
        }
        if ($request->shop_name != null) {
            # code...
            $percentage += 10;
        }
        if ($request->product_type != null) {
            # code...
            $percentage += 10;
        }
        if ($request->union_id != null) {
            # code...
            $percentage += 10;
        }
        if ($request->bazar_id != null) {
            # code...
            $percentage += 10;
        }
        if ($request->photo != null) {
            # code...
            $percentage += 40;
        }


        $add = new Retailer;
        $add->name = $request->name;
        $add->phone = $request->phone;
        $add->photo = $image;
        $add->shop_name = $request->shop_name;
        $add->bazar_side_input = $request->bazar_side_input;
        $add->bazar_area = $request->product_type;
        $add->union_id = $request->union_id;
        $add->bazar_id = $request->bazar_id;
        $add->percentage = $percentage;
        $add->user_id = Auth::user()->id;
        $add->save();

        return back();
    }

    public function retailer_update(Request $request, $id)
    {
        if (isset($request->photo)) {
            # code...
            $imageName = time().'.'.$request->photo->extension();

            $image = $request->photo->storeAs('public/retailer', $imageName);

            $image = str_replace('public','',$image);
        }


        $add = Retailer::find($id);
        $add->name = $request->name;
        $add->phone = $request->phone;
        if (isset($request->photo)) {
            # code...
            $add->photo = $image;
        }
        $add->shop_name = $request->shop_name;
        $add->bazar_side_input = $request->bazar_side_input;
        $add->bazar_area = $request->product_type;
        $add->union_id = $request->union_id;
        $add->bazar_id = $request->bazar_id;
        $add->update();

        return back();
    }
}
