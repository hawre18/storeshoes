<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        return view('index.user.v1.index');
    }
    public function profile()
    {
        $user=Auth::user();
        return view('index.user.v1.profile',compact(['user']));
    }
}
