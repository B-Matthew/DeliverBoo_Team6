@extends('layouts.main-layout')
@section('content')
 <div class="show_div">
   <div class="">
     <h1>Modifica Ristorante</h1>
   </div>
   <form method="POST" action="{{ route('update', $resturant -> id) }}">

     @csrf
     @method('POST')

     <div class="">
         <label class="" for="name"><h4>Name</h4></label>
         <div class="">
           <input value="{{ $resturant -> name}}" type="text" class="" id="name" name="name">
         </div>
     </div>
     <div class="">
         <label class="" for="address"><h4>Address</h4></label>
         <div class="">
           <input value="{{ $resturant -> address}} "type="text" class="" id="address" name="address" placeholder="Address">
         </div>
     </div>
      <div class="">
          <label class="" for="telephone"><h4>Telephone</h4></label>
          <div class="">
            <input value="{{ $resturant -> telephone}}" type="text" class="" id="telephone" name="telephone"placeholder="Telephone">
          </div>
      </div>
      <button type="submit" class="">Update</button>
   </form>
 </div>
@endsection
