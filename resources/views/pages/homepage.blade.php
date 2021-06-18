@extends('layouts.main-layout')
@section('content')

<main id="homepage">

     <section class="jumbotron">
          <div class="attach"></div>
          <div class="text">
               <h2>I tuoi piatti preferiti, a domicilio.</h2>
               <h3>Ricerca subito il tuo ristorante preferito.</h3>
          </div>
     </section>

     <section class="delivery">
          <div class="attach"></div>
          <div class="text">
               <h2>Non hai tempo di uscire? Ci pensa DeliverBoo.</h2>
               <h3>Ordina qualcosa... ti aiuteremo noi a scegliere.</h3>
               <button>
                    <a href="#categories">
                         Ordina subito
                    </a>
               </button>
          </div>
     </section>

     <section class="map">
          <div class="attach"></div>
          <div class="text">
               <h2>Operativi su tutto il territorio nazionale.</h2>
          </div>
     </section>

     <search-component :restaurants="{{$restaurants}}" :categories="{{$categories}}"></search-component>

     <section class="work">
          <h2>Ti piacerebbe lavorare con noi?</h2>
          <ul>
               <li>
                    <div>
                         <img src="{{asset('storage/img/rider.jpg')}}" alt="">
                    </div>

                    <div>
                         <h3>Rider</h3>
                         <div class="left">
                              <p>Sei in cerca di flessibilità e ottimi guadagni? Il ruolo di Rider potrebbe fare al caso tuo! Un mondo di vantaggi ti aspettano con noi. </p>
                         </div>
                         <button>
                              <a href="">Unisciti a noi</a>
                         </button>
                    </div>
               </li>

               <li>
                    <div>
                         <img src="{{asset('storage/img/ristorante.jpg')}}" alt="">
                    </div>
                    <div>
                         <h3>Ristorante</h3>
                         <div class="left">
                              <p>Sei in cerca di reali vantaggi? Diventa un nostro partner e raggiungerai sempre nuovi clienti. Noi ci occuperemo della consegna dei tuoi prodotti, tu non dovrai pensare ad altro.</p>
                         </div>
                         <button>
                              <a href="">Collabora con noi</a>
                         </button>
                    </div>
               </li>

               <li>
                    <div>
                         <img src="{{asset('storage/img/work.webp')}}" alt="">
                    </div>
                    <div>
                         <h3>Lavora con noi</h3>
                         <div class="left">
                              <p>Mangiare deve essere facile, comodo e semplice. Questo è il nostro obiettivo, la nostra ambizione... ma abbiamo bisogno anche di te.</p>
                         </div>
                         <button>
                              <a href="">Lavora con noi</a>
                         </button>
                    </div>
               </li>
          </ul>
     </section>

</main>
    
@endsection