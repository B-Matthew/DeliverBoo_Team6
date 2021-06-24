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
            <a href="{{ route('createProduct' , encrypt($restaurant -> id)) }}">Crea un
                nuovo piatto</a>
        </div>

        <div class="products">

            @foreach($restaurant -> products as $product)
                <div>
                    <div class="head-product">
                        <h2>{{ $product -> name }}</h2>
                        @if($product -> availability)
                            <i class="fas fa-check-circle"> DISPONIBILE </i>
                        @else
                            <i class="fas fa-times-circle"> NON DISPONIBILE </i>

                        @endif
                    </div>

                    <ul>
                      <li>
                              
                                <div>
                                    <label for="ingredienti">INGREDIENTI</label>
                                    <h4>{{ $product -> ingredients }}</h4>
                                </div>
                                <div>
                                    <label for="descrizione">DESCRIZIONE</label>
                                    <h4>{{ $product -> description }}</h4>
                                </div>

                                <div>
                                    <label for="prezzo">PREZZO</label>
                                    <h4>{{ $product -> price }}</h4>
                                </div>
                                <div>
                                    <label for="tipo">TIPO</label>
                                    <h4>{{ $product -> type }}</h4>
                                </div>

                              </li>

                              <li>

                                <div>
                            <a
                                href="{{ route('editProduct' , encrypt($product -> id)) }}">
                                <i class="fas fa-edit">  MODIFICA IL TUP PIATTO  </i>
                            </a>
     
                            <a href="{{ route('deleteProduct', $product -> id) }}">
                                <i class="fas fa-trash-alt">  CANCELLA IL TUO PIATTO </i>
                            </a>
                        </div>   
                              </li>
                              
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

</main>
@endsection
