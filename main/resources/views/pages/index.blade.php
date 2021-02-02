@extends('layouts.main-layout')

@section('content')
    
    <ul>
        @foreach ($drinks as $drink)
        <li>
            <a href="{{route('show-drink' ,$drink -> id)}}">{{$drink -> name}}</a>    
            <div>
                <a href="{{route('delete-drink' , $drink -> id)}}"><i class="far fa-trash-alt"></i></a>
                <a href="{{route('edit-drink' , $drink -> id)}}"><i class="far fa-edit"></i></a>
            </div>
        </li>
        @endforeach    
    </ul>

@endsection