@extends('layouts.main-layout')
@section('content')
    <main id="home-restaurant">
        
        <div>{{--sará in absolute--}}
            <h3>"antipasto"</h3>
            <ul>
                <li>
                {{-- qui ci saranno i piatti listati per tipo --}}
                <span>piatto 1</span>
                </li>
            </ul>
        </div>

        <div>    
            {{-- box con info ristorante centrale --}}
            <h2>NOME RISTORANTE</h2>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <span>recensioni?</span>
            <p>categorie cucina</p>
            <p>via del ristorante</p>
            <button>menu</button>
            <button>info</button>   
        </div>

        <div>{{-- CI SARÁ UN FOR PER CICLARE I PIATTI PER TIPOLOGIA--}}
            <h2>TIPO DI PIATTO "ANTIPASTO"</h2>
            <ul>
                <li>
                    nome del piatto   
                </li>   
                <li>
                    descrizione
                </li>
                <li>
                    ingredienti
                </li>
            </ul>
        </div>

        <div>
            <h2>IL TUO CARRELLO</h2>
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

            <h2>TOTALE</h2>
            <span>prezzo</span>

            <a href="">vai al pagamento</a>   
        </div>
        <div class="show_div">
      <ul>
        
          <li>
            {{$restaurant -> name}}
           <h1>Antipasti:</h1>
           @foreach ($antipasti as $antipasto)
               {{$antipasto -> name}} <br>
           @endforeach
           <h1>Primi:</h1>
            @foreach ($primi as $primo)
               {{$primo -> name}} <br>
           @endforeach
           <h1>Secondi:</h1>
            @foreach ($secondi as $secondi)
               {{$secondi -> name}} <br>
           @endforeach

          </li>
        </ul>
        </div>
        
    </main>
@endsection