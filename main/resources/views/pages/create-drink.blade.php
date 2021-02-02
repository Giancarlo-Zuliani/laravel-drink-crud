@extends('layouts.main-layout')

@section('content')
    <form action="{{route('store-drink')}}" method="post">
        @csrf
        @method('post')
         
            <label for="name">Name : </label>
            <input type="text" name="name" placeholder="name">
            <label for="ingredient_one">ingredient : </label>
            <input type="text" name="ingredient_one">
            <label for="ingredient_two">ingredient : </label>
            <input type="text" name="ingredient_two">
            <label for="ingredient_three">ingredient : </label>
            <input type="text" name="ingredient_three">
            <label for="alcool">ingredient : </label>
            <input type="number" name="alcool"> 
            <button type="submit">submit</button>
    
    </form>

@endsection