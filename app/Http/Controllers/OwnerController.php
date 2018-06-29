<?php

namespace App\Http\Controllers;

use App\owner;
use App\admin;
use App\User;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:owner');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('owner');
    }

    public function getUsers()
    {

        $User = User::all()->toArray();
        $owner = owner::all()->toArray();
        $admin = admin::all()->toArray();

        return view('Userslist' , compact('User' , 'owner' , 'admin'));
    }

    public function authUsers()
    {
        $User = User::all()->toArray();
        $admin = admin::all()->toArray();
        $owner = owner::all()->toArray();

        return view('Authentication' , compact('User' , 'admin' , 'owner'));
    }

    public function Auth()
    {
        return 'ma 9ar shy :)';
    }


}
