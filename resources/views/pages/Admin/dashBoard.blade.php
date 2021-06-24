@extends('layouts.main-layout')
@section('content')
<main id="dashboard">

     <section class="welcome">
          <h1>Bentornato, {{$user->name}}</h1>
     </section>
   
     <section class="restaurants">
          <h3>I tuoi ristoranti</h3>
          <ul>
               @foreach ($user -> restaurants as $restaurant)
               @if (!$restaurant -> deleted)
               <li>
                    <img src="{{asset('storage/restaurant-img/' . $restaurant -> img)}}" alt="">
                    <span><a href="{{route('myProduct' , encrypt($restaurant -> id))}}">{{$restaurant -> name}}</a></span>
                    <a href="{{route('deleteRestaurant', $restaurant -> id)}}"><i class="fas fa-trash-alt"></i></a>
                    <a href="{{route('editRestaurant' , encrypt($restaurant -> id))}}"><i class="fas fa-edit"></i></a>
               </li>
               @endif
               @endforeach
          </ul>
     </section>
                   
     <section class="create">
          <h2>Hai una nuova attività?</h2>
      
          <form method="POST" action="{{ route('store-restaurant') }}" enctype="multipart/form-data"> 
               @csrf
               @method('POST')
              <fieldset>
                    <legend>Aggiungi ristorante</legend>
                    <div>
                         <label class="" for="name">
                         <h4>Nome Ristorante</h4>
                         </label>
                         <input type="text" class="" id="name" name="name" placeholder="Inserisci il nome..">
                    </div>
      
                    <div>
                         <label class="" for="city">
                              <h4>Città</h4>
                         </label>
                         <input type="text" class="" id="città" name="city" placeholder="Inserisci la città..">
                    </div>
          
                    <div>
                         <label class="" for="address">
                              <h4>Indirizzo</h4>
                         </label>
                         <input type="text" class="" id="address" name="address" placeholder="Inserisci l'indirizzo..">
                    </div>
      
                    <div>
                         <label class="" for="telephone">
                              <h4>Recapito telefonico</h4>
                         </label>
                         <input type="number" class="" id="telephone" name="telephone" placeholder="Inserisci il numero..">
                    </div>

                    <div>
                         <label class="" for="pIva">
                              <h4>Partita Iva</h4>
                         </label>
                         <input type="text" class="" id="pIva" name="pIva" placeholder="Inserisci la partita Iva..">
                    </div>

                    <div>
                         <label class="" for="img">
                              <h4>Immagine del tuo ristorante</h4>
                         </label>
                         <input type="file" name="img">
                    </div>

                    <ul>
                         @foreach ($categories as $category)
                         <li>
                              <input type="checkbox" name="categories[]" value="{{$category -> id}}">
                              <label for="category">{{$category->name}}</label>
                         </li>
                         @endforeach
                    </ul>
          
                    <div class="button">
                         <button type="submit">
                         Aggiungi
                         </button>
                    </div>
              </fieldset>
          </form>
     </section>

</main>
    
@endsection
