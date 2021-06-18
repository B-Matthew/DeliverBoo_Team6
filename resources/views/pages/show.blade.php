@extends('layouts.main-layout')
@section('content')
    <div class="show_div">
      <ul>
        @foreach ($restaurants as $restaurant)
          <li>
           <a href="{{ route('restaurant', $restaurant -> id) }}">
             Name:{{ $restaurant -> name }}
             Address:{{ $restaurant -> address }}
             Telephone:{{ $restaurant -> telephone }}
           </a>
           <a href="{{ route('edit', $restaurant -> id) }}">
             &#9998;
           </a>
           <a href="{{ route('destroyRestaurant', $restaurant -> id) }}">
             &#10060;
           </a>
          </li>
        @endforeach
    </ul>
    </div>
@endsection
