<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class VetController extends Controller
{
    //
    function vetregister(Request $req){
        $vetuser = new User;
        $vetuser -> name = $req -> input('name');
        $vetuser -> email = $req -> input('email');
        $vetuser -> password = Hash::make($req -> input('password'));
        $vetuser -> save();

        return $vetuser;
    }
}
