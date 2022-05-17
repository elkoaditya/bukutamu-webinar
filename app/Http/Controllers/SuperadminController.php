<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Webinar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperadminController extends Controller
{
    public function Home(){
        $user = User::where('id', Auth::id())->with('detail')->first()->toJson();
        $webinar =Webinar::all();
        return view('Superadmin.home', compact('user', 'webinar'));
    }
}
