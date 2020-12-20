<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        $paket = Paket::where('id_user', Auth::user()->id)->orderBy('created_at','desc')->first();

        return view("dashboard.index", compact('paket'));
    }
}
