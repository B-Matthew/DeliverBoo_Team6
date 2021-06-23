@extends('layouts.main-layout')
@section('content')
  <h2 style="padding-top: 100px">{{$restaurant -> name}}</h2>
  <a href="{{route('createProduct' , encrypt($restaurant -> id))}}">Crea un nuovo piatto</a>
    <ul>
      @foreach ($restaurant -> products as $product)
          <li style="margin-top: 30px">
            <p>{{$product -> name}} <a href="{{route('editProduct' , encrypt($product -> id))}}"><i class="fas fa-edit"></i></a> <a href="{{route('deleteProduct', $product -> id)}}"><i class="fas fa-trash-alt"></i></a></p>
            <p>{{$product -> ingredients}}</p>
            <p>{{$product -> description}}</p>
            <p>{{$product -> type}}</p>
            <p>{{$product -> price}}</p>
            @if ($product -> availability)
            <p> E' disponibile</p>
            @else
            <p>Non Disponibile</p>
            @endif
          </li>
           
          @endforeach
        </ul>
        @endsection
                
