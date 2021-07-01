@extends('layouts.main-layout')
@section('content')

<main id="my-product">   


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

        <div>
            <a href="{{ route('createProduct' , encrypt($restaurant -> id)) }}">
                Aggiungi un piatto
            </a>
        </div>

        <ul class="products">

            @foreach($restaurant -> products as $product)
                <li class="product-box">
                    <div class="head-product">
                        <h2>{{ $product -> name }}</h2>
                        @if($product -> availability)
                        <div class="active">
                            <i class="fas fa-check-circle"></i>
                            <span> DISPONIBILE</span>
                         </div>   
                        @else
                        <div class="not-active">   
                            <i class="fas fa-times-circle"> </i>
                            <span>NON DISPONIBILE</span>    
                        </div>   
                        @endif
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

                        <li>

                            <div>
                                <button>
                                    <a href="{{ route('editProduct' , encrypt($product -> id)) }}">
                                        Modifica piatto
                                    </a>
                                </button>

                                <button>
                                    <a href="{{ route('deleteProduct', $product -> id) }}">   
                                        Cancella piatto 
                                    </a>
                                </button>
                            </div>
                        </li>   

                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
    <div style="padding-bottom: 300px;width:70%">
    <chart-component :amount="{{$amount}}" :orders = '{{$orders}}'></chart-component>
    </div>
</main>
@endsection

