<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function GetHome()
    {
        return view('home');
    }

    public function GetMovies()
    {
        return view( 'Movies');
    }

    public function GetSeries()
    {
            return view( 'Series');
    }

    public function GetContact()
    {
        return view( 'Contact');
    }

    public function GetUserslist()
    {
        return view( 'Userslist');
    }

    public function GetAuthentication()
    {
        return view('Authentication');
    }

    public function GetRemoveVideos()
    {
        return view( 'removevideos');
    }

    public function GetAddVideos()
    {
        return view( 'addvideos');
    }
}
