<?php

namespace App\Http\Controllers;
use App\Models\User; //seeders use
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add(){
        user::factory(100)->create();
        return view("add");
    }

    public function show(){
        $users = user::all();
        return view("view" , compact("users"));
    }
}
