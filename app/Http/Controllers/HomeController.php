<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public static function getall(){
        $usuarios = new User();
        return $usuarios -> getAll();
    }

   


}
