<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;

class DrinkController extends Controller
{
    public function index(){
        $drinks = Drink::all();
        return view('pages.index' , compact('drinks'));
    }
    public function show($id){
        $drink = Drink::findOrFail($id);
        return view('pages.show-drink', compact('drink'));
    }
    public function create(){
        return view('pages.create-drink');
    }
    public function store(Request $request){
        Drink::create($request -> all());
        return redirect() -> route('home-drink');
    }
    public function destroy($id){
        Drink::destroy($id);
        return redirect() -> route('home-drink');
    }
    public function edit($id){
        $drink = Drink::findOrFail($id);
        return view('pages.edit-drink' , compact('drink'));
    }
    public function update(Request $request,$id){
        $drink = Drink::findOrFail($id);
        $drink -> update($request -> all());
        return redirect() -> route('home-drink');
    }
}
