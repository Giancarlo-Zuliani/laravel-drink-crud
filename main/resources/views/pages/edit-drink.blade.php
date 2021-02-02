@extends('layouts.main-layout')

@section('content')
    <form action="{{route('update-drink' , $drink -> id)}}" method="post">
        @csrf
        @method('post')
        
            <label for="name">Name : </label>
            <input type="text" name="name" value="{{$drink -> name}}">
            <label for="ingredient_one">ingredient : </label>
            <input type="text" name="ingredient_one" value="{{$drink -> ingredient_one}}">>
            <label for="ingredient_two">ingredient : </label>
            <input type="text" name="ingredient_two" value="{{$drink -> ingredient_two}}">
            <label for="ingredient_three">ingredient : </label>
            <input type="text" name="ingredient_three" value="{{$drink -> ingredient_three}}">
            <label for="alcool">alcool : </label>
            <input type="numeric" name="alcool" value="{{$drink -> alcool}}"> 
            <button type="submit">submit</button>
    
    </form>
@endsection