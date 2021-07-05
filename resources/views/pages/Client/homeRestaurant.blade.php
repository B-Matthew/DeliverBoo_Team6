@extends('layouts.main-layout')
@section('content')
<main id="home-restaurant">
    <section class="jumbotron">
      <div class="jumb">

        <h1>{{ $restaurant -> name }}</h1>

          <div class="txt-jumb">

            <div>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>


            <div>
              @foreach($restaurant -> categories as $category)
                <span> {{ $category -> name }} </span>
              @endforeach
            </div>

            <div>
              <p>{{ $restaurant -> address }}</p>
            </div>
          </div>
        </div>

    </section>

    <homerestaurant-component
    :antipasti="{{$antipasti}}"
    :primi="{{$primi}}" :secondi="{{$secondi}}"
    checkout="{{route('checkout')}}"
    :dolci="{{$dolci}}"
    >

</homerestaurant-component>
</main>
@endsection
