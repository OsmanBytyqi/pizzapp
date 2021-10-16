<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){

        // $pizzas=Pizza::all();
       // $pizzas=Pizza::orderby('name','desc')->get();
            $pizzas=Pizza::where('type','hawaiian')->get();
        return view('pizzas',['pizzas'=>$pizzas]);
       
       
    }

    public function show($id){
        return view('details',['id'=>$id]);

    }
}
