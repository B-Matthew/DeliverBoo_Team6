@extends('layouts.main-layout')
@section('content')
<main id="home-restaurant">


 {{-- parte sinistra  --}}
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


        {{-- contenitore di tutta la parte centrale --}}
    <div class="container-menu">   

        {{-- parte di copertina del ristorante --}}
        <fieldset class="box-restaurant">
            <legend>{{ strtoupper($restaurant -> name) }}</legend>      

            <div class="copertina">
                <img src="{{ asset('storage/restaurant-img/' . $restaurant -> img) }}" alt="">
            </div>   
            
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
                <p>{{ $restaurant -> address }}</p>   
            </div>   

            <div>      
                <button>menu</button>
                <button>info</button>
            </div>
        </fieldset>   
        
        {{-- parte del menu sottostante la copertina --}}
        <div class="menu">
            <div>
                <h2>Antipasti</h2>

                <ul>
                    @foreach($antipasti as $antipasto)
                        <li>   
                            <div>
                                <h3>{{ $antipasto -> name }}</h3> 
                                <h5>{{ $antipasto -> ingredients }}</h5> 
                                <p>{{ $antipasto -> description }}</p>  
                            </div>   

                            <div>
                                <i class="fas fa-plus"></i> 
                                <h3> 
                                    {{ $antipasto -> price }}    
                                    <i class="fas fa-euro-sign"></i>
                                </h3>          
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
                            </div>   
   
                            <div>
                                <i class="fas fa-plus"></i> 
                                <h3> 
                                    {{ $primo -> price }}    
                                    <i class="fas fa-euro-sign"></i>
                                </h3>          
                                
                                          
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
                            </div>   

                            <div>
                                <i class="fas fa-plus"></i> 
                                <h3> 
                                    {{ $secondo -> price }}    
                                    <i class="fas fa-euro-sign"></i>
                                </h3>          
                            </div>
                        </li>       
                    @endforeach   
                </ul>
            </div>
        </div>
    </div>

    {{-- sezione carrello --}}   
    <fieldset class="carrello">
        <legend>IL TUO CARRELLO</legend>   
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

        <h3>TOTALE</h3>
        <span>prezzo</span>

        <div>
            <button>
                <a href="#">vai al pagamento</a>
            </button>      
        </div>   
    </fieldset>


</main>   
@endsection