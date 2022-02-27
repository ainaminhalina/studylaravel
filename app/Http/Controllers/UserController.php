<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        echo "Hi saya dari UserController";
    }

    function display(){
        echo "Hi saya display function dari UserController";
    }

    function id($id){
        echo "Hi saya $id function dari UserController";
    }

    function optional($id, $id2 = ""){
        echo "Hi saya $id function dari UserController" . '</br>';
        echo "Hi saya $id2 function dari UserController";
    }

    function displayuser(){
        return view("displayuser");
    }
}
