@extends('layouts.main-layout')
@section('content')
    <div class="show_div">
      <ul>
        @foreach ($restaurants as $restaurant)
          <li>
           {{-- <a href="{{ route('restaurant', $restaurant -> id) }}">
             Name:{{ $restaurant -> name }}
             Address:{{ $restaurant -> address }}
             Telephone:{{ $restaurant -> telephone }}
           </a> --}}
           <a href="{{ route('edit', $restaurant -> id) }}">
             &#9998;
           </a>
           <a href="{{ route('destroyRestaurant', $restaurant -> id) }}">
             &#10060;
           </a>
           @foreach ($antipasti as $antipasto)
             <li>
               {{ $antipasto -> name }} 
              {{-- <a href="{{ route('antipasto', $antipasto -> id) }}">
                Ingredients:{{ $antipasto -> ingredients }}
                Description:{{ $antipasto -> description }}
                Type:{{ $antipasto -> type }}
                Price:{{ $antipasto -> price }}
                Availability:{{ $antipasto -> availability }}
              </a> --}}
              {{-- <a href="{{ route('editProduct', $product -> id) }}">
                &#9998;
              </a>
              <a href="{{ route('destroyProduct', $product -> id) }}">
                &#10060;
              </a> --}}
             </li>
           @endforeach
          </li>
        @endforeach
    </ul>
    </div>
@endsection
