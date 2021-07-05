@extends('layouts.main-layout')
@section('content')

<main id="report">   


    <section class="jumbotron">
        <h1>{{ $restaurant -> name }}</h1>

        <div>
            @foreach($restaurant -> categories as $category)
                <span> {{ $category -> name }} </span>
            @endforeach
        </div>

        <div>
            <p>{{ $restaurant -> address }}</p>
        </div>
    </section>

    <div class="container-menu">

        <div class="products-box">

            <ul class="info">
                <li>
                    <i class="fas fa-file-signature"></i>
                    <span> {{$restaurant -> name}}</span>
                </li>

                <li>
                    <i class="fas fa-map-marker"></i>
                    <span>{{$restaurant -> address}}</span>
                </li>

                <li>
                    <i class="fas fa-city"></i>
                    <span>{{$restaurant -> city}}</span>
                </li>

                <li>
                    <i class="fas fa-phone-alt"></i>
                    <span>{{$restaurant -> telephone}}</span>
                </li>

                <li>
                    <i class="far fa-id-card"></i>
                    <span>{{$restaurant -> pIva}}</span>
                </li>
            </ul>

            <div>

                <div>
                    <button>
                        <a href="{{ route('myProduct' , encrypt($restaurant -> id)) }}">
                           Torna al Menu
                        </a>
                    </button>
                </div>
   
                <ul class="products">
                    
                    @foreach($orders  as $order)
                        <li class="product-box">
                            <div class="head-product">
                                <h2>{{ $order -> name }}</h2>
                            </div>
        
                            <ul>
                                <li>
        
                                    <div>
                                        
                                        <h4>{{ $order -> address }}</h4>
                                    </div>
                                    <div>
                                        
                                        <h4>{{ $order -> email }}</h4>
                                    </div>
        
                                    <div>
                                        
                                        <h4>{{ $order -> created_at }}</h4>
                                    </div>
                                    <div>
                                        
                                        <h4>€ {{ $order -> amount }}</h4>
                                    </div>
                                   
                                    
                                </li>   
        
                            </ul>
                        </li>
                    @endforeach
                    
                </ul>
            </div>

        </div>
    </div>   
   
</main>
@endsection