@extends('layouts.main-layout')
@section('content')
    <div class="show_div">
      <ul>
        <li>
          <h1>Name: {{ $product -> name }}</h1>
        </li>
        <li>
          Ingredients:{{ $product -> ingredients }}
        </li>
        <li>
          Description:{{ $product -> description }}
        </li>
        <li>
          Type:{{ $product -> type }}
        </li>
        <li>
          Price:{{ $product -> price }}
        </li>
        <li>
          Availability:{{ $product -> availability }}
        </li>
        {{-- <a href="{{ route('edit', $product -> id) }}">
          &#9998;
        </a>
        <a href="{{ route('destroyProduct', $product -> id) }}">
          &#10060;
        </a> --}}
     </ul>
    </div>
@endsection
