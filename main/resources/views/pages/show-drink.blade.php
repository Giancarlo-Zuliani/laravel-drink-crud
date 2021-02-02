@extends('layouts.main-layout')

@section('content')

<div class="box">
    <h2>{{$drink -> name}}</h2>
    <h2>{{$drink -> ingredient_one}}</h2>
    <h2>{{$drink -> ingredient_two}}</h2>
    <h2>{{$drink -> ingredient_tre}}</h2>
    <h2>{{$drink -> alcool}}</h2>

</div>

@endsection