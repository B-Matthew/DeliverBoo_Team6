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

    <section class="menu">

        <div class="aside-menu">

            <h2>Antipasti</h2>   
            <ul>
                @foreach($antipasti as $antipasto)
                    <li>
                        {{ $antipasto -> name }}   
                    </li>
                @endforeach
            </ul>   
       
            <h2>Primi</h2>
            <ul>
                @foreach($primi as $primo)
                    <li>
                        {{ $primo -> name }}
                    </li>
                @endforeach
            </ul>
    
            <h2>Secondi</h2>
            <ul>
                @foreach($secondi as $secondo)
                    <li>
                        {{ $secondo -> name }}   
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="container-menu">   

           
            <div class="products">
                <div>
                    <h2>Antipasti</h2>
    
                    <ul>
                        @foreach($antipasti as $antipasto)
                            <li>   
                                <div>
                                    <h3>{{ $antipasto -> name }}</h3> 
                                    <h5>{{ $antipasto -> ingredients }}</h5> 
                                    <p>{{ $antipasto -> description }}</p>
                                    <i class="fas fa-plus"></i>  
                                </div>   
    
                                <div class="image">
                                    <img src="{{ asset('storage/img/antipasti.png') }}" alt=""> 
                                    <h4> 
                                        {{ $antipasto -> price }}    
                                        <i class="fas fa-euro-sign"></i>
                                    </h4>          
                                </div>
                            </li>            
                            @endforeach
                        </ul>
    
                    <h2>Primi</h2>
    
                    <ul>
                        @foreach($primi as $primo)
                            <li>   
                                <div>
                                    <h3>{{ $primo -> name }}</h3> 
                                    <h5>{{ $primo -> ingredients }}</h5> 
                                    <p>{{ $primo -> description }}</p>
                                    <i class="fas fa-plus"></i> 
                                </div>
                                
                                <div class="image">
                                    <img src="{{ asset('storage/img/primi.png') }}" alt="">
                                    <h4> 
                                        {{ $primo -> price }}    
                                        <i class="fas fa-euro-sign"></i>
                                    </h4>      
                                </div>
                            </li>       
                        @endforeach
                    </ul>
       
                    <h2>Secondi</h2>
       
                    <ul>
                        @foreach($secondi as $secondo)
                           <li>   
                                <div>
                                    <h3>{{ $secondo -> name }}</h3> 
                                    <h5>{{ $secondo -> ingredients }}</h5> 
                                    <p>{{ $secondo -> description }}</p>
                                    <i class="fas fa-plus"></i> 
                                </div>   
    
                                <div class="image">
                                    <img src="{{ asset('storage/img/secondi.png') }}" alt="">
                                    <h4> 
                                        {{ $secondo -> price }}    
                                        <i class="fas fa-euro-sign"></i>
                                    </h4>          
                                </div>
                            </li>       
                        @endforeach   
                    </ul>
                </div>
            </div>
        </div>

        <div class="carrello">
            <h2>Il tuo carrello</h2>   
            <ul>
                <li>
                    <span>nome piatto"aggiunto"</span>
                    <span>prezzo</span>
                </li>
                <li>
                    <span>nome piatto"aggiunto"</span>
                    <span>prezzo</span>
                </li>
                <li>   
                    <span>nome piatto"aggiunto"</span>
                    <span>prezzo</span>
                </li>
            </ul>
    
            <h3>Totale</h3>
            <span>prezzo</span>
    
            <div>
                <button>
                    <a href="{{route('checkout')}}">vai al pagamento</a>
                </button>      
            </div>   
        </div>
        
    </section>
    
</main>   
@endsection