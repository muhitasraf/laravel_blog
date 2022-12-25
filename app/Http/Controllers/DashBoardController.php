<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index(){
        $title = 'Dashboard';
        return view('dashboard/index',compact('title'));
    }
    public function profile(){
        $title = 'Profile Section';
        return view('dashboard/profile/index',compact('title'));
    }

    public function editProfile(){
        $title = 'Edit Profile';
        return view('dashboard/profile/edit',compact('title'));
    }

}
