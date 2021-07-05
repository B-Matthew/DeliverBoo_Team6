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
                        <a href="{{ route('createProduct' , encrypt($restaurant -> id)) }}">
                           torna al menu
                        </a>
                    </button>
                </div>
   
                <ul class="products">
                
                    @foreach($restaurant -> products as $product)
                        <li class="product-box">
                            <div class="head-product">
                                <h2>{{ $product -> name }}</h2>
                            </div>
        
                            <ul>
                                <li>
        
                                    <div>
                                        <label for="ingredienti">Ingredienti</label>
                                        <h4>{{ $product -> ingredients }}</h4>
                                    </div>
                                    <div>
                                        <label for="descrizione">Descrizione</label>
                                        <h4>{{ $product -> description }}</h4>
                                    </div>
        
                                    <div>
                                        <label for="prezzo">Prezzo</label>
                                        <h4>{{ $product -> price }} €</h4>
                                    </div>
                                    <div>
                                        <label for="tipo">Tipo</label>
                                        <h4>{{ $product -> type }}</h4>
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