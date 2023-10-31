<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SR;
use App\Models\Company;
use App\Models\Dealer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class SRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = Company::all();

        $dealer = Dealer::all();

        $data = SR::all();

        return view('admin.sr.index',compact('dealer','company','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function profile($id)
    {
        $data = SR::find($id);

        return view('admin.sr.profile',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->type = 'sr';
        $user->save();

        $imageName = time().'.'.$request->picture->extension();

        $image = $request->picture->storeAs('public/sr', $imageName);

        $image = str_replace('public','',$image);

        $add = new SR;
        $add->name = $request->name;
        $add->company_id = $request->company_id;
        $add->dealer_id = $request->dealer_id;
        $add->picture = $image;
        $add->email = $request->email;
        $add->phone = $request->phone;
        $add->nid = $request->nid;
        $add->user_id = $user->id;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
