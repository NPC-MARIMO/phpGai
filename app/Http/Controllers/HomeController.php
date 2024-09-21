<?php
namespace App\Http\Controllers;
use Illuminate\Http\Reauest;
class Home extends Controller
{
    public function login(Request $req)
    {
        return view("login");   
    }
}
class kajal extends Cotroller
{
    public function HomeController(Request $req){
        return view("kajal");
    }
}