@extends('layouts.main-layout')
@section('content')
    <div class="show_div">
      <ul>
        <li>
          <h1>Name: {{ $restaurant -> name }}</h1>
        </li>
        <li>
          Address: [{{ $restaurant -> address }}]
        </li>
        <li>
          Telephone: {{ $restaurant -> telephone }}
        </li>
        <a href="{{ route('edit', $restaurant -> id) }}">
          &#9998;
        </a>
        <a href="{{ route('destroyRestaurant', $restaurant -> id) }}">
          &#10060;
        </a>
     </ul>
    </div>
@endsection
