@extends('layouts.main-layout')
@section('content')
 <div class="show_div">
   <div class="">
     <h1>Nuovo Ristorante</h1>
   </div>

   <h1>Benvenuto {{$user->name}} ID : {{$user->id}}</h1>
   <h2>I Tuoi Ristoranti:</h2>
   <ul>
     @foreach ($user -> restaurants as $u)
     <li>
       {{$u -> name}} 
        @foreach ($u -> categories as $category)
        {{$category-> name}}
        @endforeach
      </li>
      @endforeach
    </ul>
    
    <form method="POST" action="{{ route('store-restaurant') }}" enctype="multipart/form-data"> 
 
      @csrf
      @method('POST')
 
      <div class="">
          <label class="" for="name"><h4>Nome Ristorante</h4></label>
          <div class="">
            <input type="text" class="" id="name" name="name" placeholder="Inserisci il nome..">
          </div>
      </div>
      <div class="">
          <label class="" for="city"><h4>Città</h4></label>
          <div class="">
            <input type="text" class="" id="città" name="city" placeholder="Inserisci la città..">
          </div>
      </div>
      <div class="">
          <label class="" for="address"><h4>Address</h4></label>
          <div class="">
            <input type="text" class="" id="address" name="address" placeholder="Inserisci l'indirizzo..">
          </div>
      </div>
       <div class="">
           <label class="" for="telephone"><h4>Telephone</h4></label>
           <div class="">
             <input type="number" class="" id="telephone" name="telephone" placeholder="Inserisci il numero..">
           </div>
       </div>
       <div class="">
           <label class="" for="pIva"><h4>Partita Iva</h4></label>
           <div class="">
             <input type="number" class="" id="pIva" name="pIva" placeholder="Inserisci la partita Iva..">
           </div>
       </div>
       <div class="">
           <label class="" for="img"><h4>Immagine del tuo ristorante</h4></label>
           <div class="">
             <input type="file" name="img">
           </div>
       </div>
       <div>
         <ul>
           @foreach ($categories as $category)
           <li>
             <label for="category">{{$category->name}}</label>
             <input type="checkbox" name="category_id[]" value="{{$category -> id}}">
           </li>
           @endforeach
         </ul>
       </div>
       <button type="submit" class="">Submit</button>
    </form>
  </div>
 @endsection
           
            
               
          
         
   

