@extends('layouts.main-layout')
@section('content')
  <h2 style="padding-top: 100px">{{$restaurant -> name}}</h2>
    <ul >
      @foreach ($restaurant -> products as $product)
          <li style="margin-top: 30px">
            <p>{{$product -> name}}</p>
            <p>{{$product -> ingredients}}</p>
            <p>{{$product -> description}}</p>
            <p>{{$product -> type}}</p>
            <p>{{$product -> price}}</p>
            @if ($product -> availability)
            <p>E' disponibile</p>
            @else
            <p>Non Disponibile</p>
            @endif
           
          </li>
          @endforeach
        </ul>
        @endsection
                
