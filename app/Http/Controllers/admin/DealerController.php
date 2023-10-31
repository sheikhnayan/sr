<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\User;
use App\Models\Dealer;

class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Dealer::all();

        return view('admin.dealer.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dealer.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->type = 'delaer';
        $user->save();

        $imageName = time().'.'.$request->picture->extension();

        $image = $request->picture->storeAs('public/dealer', $imageName);

        $image = str_replace('public','',$image);

        $add = new Dealer;
        $add->name = $request->name;
        $add->picture = $image;
        $add->email = $request->email;
        $add->phone = $request->phone;
        $add->optional_phone = $request->optional_phone;
        $add->nid = $request->nid;
        $add->user_id = $user->id;
        $add->save();

        return back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        ]);

        $find = Dealer::find($id);

        $user = User::find($dealer->use_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();

        if (isset($request->photo)) {

            $imageName = time().'.'.$request->picture->extension();

            $image = $request->picture->storeAs('public/dealer', $imageName);

            $image = str_replace('public','',$image);
        }


        $add = Dealer::find( $id );
        $add->name = $request->name;
        if (isset($request->photo)) {
            $add->picture = $image;
        }
        $add->email = $request->email;
        $add->phone = $request->phone;
        $add->optional_phone = $request->optional_phone;
        $add->nid = $request->nid;
        $add->user_id = $user->id;
        $add->update();

        return back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function company()
    {
        return view('admin.dealer.company');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function list()
    {
        return view('admin.dealer.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function profile($id)
    {
        $data = Dealer::find($id);

        return view('admin.dealer.profile',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function profit()
    {
        return view('admin.dealer.profit');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function sr_profit()
    {
        return view('admin.dealer.sr-profit');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function success()
    {
        return view('admin.dealer.success');
    }
}
