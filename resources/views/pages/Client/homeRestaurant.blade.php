@extends('layouts.main-layout')
@section('content')
<main id="home-restaurant">
    <section class="jumbotron">

        <h1>{{ $restaurant -> name }}</h1>

        <div>   
            <i class="far fa-star"></i>   
            <i class="far fa-star"></i>   
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>   
            <span>recensioni?</span>
        </div>

        <div>
            @foreach($restaurant -> categories as $category)
                <span> {{ $category -> name }} </span>
            @endforeach   
        </div>      

        <div>
            <p>{{ $restaurant -> address }}</p>
        </div>

    </section>

    <homerestaurant-component 
    :antipasti="{{$antipasti}}" 
    :primi="{{$primi}}" :secondi="{{$secondi}}" 
    :checkout="'/client/checkout/'" 
    :dolci="{{$dolci}}"
    route-submit="{{route('submit')}}"
    csrf="{{csrf_token()}}">
    
    </homerestaurant-component>    
</main>   
@endsection