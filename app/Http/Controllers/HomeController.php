<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function loginAdmin(Request $resuest)
    {
        $inputData = array('username'=> $resuest->username, 'password' => Hash::make($resuest->password));
        if (Auth::attempt($inputData)) {
            return redirect()->intended('/')
                        ->withSuccess('Signed in');
        }
        return redirect("admin")->withSuccess('Login details are not valid');
    }
}
