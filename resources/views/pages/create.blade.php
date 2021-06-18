@extends('layouts.main-layout')
@section('content')
 <div class="show_div">
   <div class="">
     <h1>Nuovo Ristorante</h1>
   </div>
   <form method="POST" action="{{ route('store') }}">

     @csrf
     @method('POST')

     <div class="">
         <label class="" for="name"><h4>Name</h4></label>
         <div class="">
           <input type="text" class="" id="name" name="name" placeholder="Name">
         </div>
     </div>
     <div class="">
         <label class="" for="address"><h4>Address</h4></label>
         <div class="">
           <input type="text" class="" id="address" name="address" placeholder="Address">
         </div>
     </div>
      <div class="">
          <label class="" for="telephone"><h4>Telephone</h4></label>
          <div class="">
            <input type="text" class="" id="telephone" name="telephone"placeholder="Telephone">
          </div>
      </div>
      <button type="submit" class="">Submit</button>
   </form>
 </div>
@endsection
