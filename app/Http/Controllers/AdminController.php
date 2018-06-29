<?php

namespace App\Http\Controllers;

use App\admin;
use App\User;
use App\owner;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin' || 'auth:owner');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    public function getUsers()
    {

        $User = User::all()->toArray();
        $admin = admin::all()->toArray();
        $owner = owner::all()->toArray();


        return view('Userslist' , compact('User' , 'admin' , 'owner'));
    }
}
