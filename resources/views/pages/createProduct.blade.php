@extends('layouts.main-layout')
@section('content')
 <div class="show_div">
   
     <h1>Nuovo Piatto</h1>
   
   
   <form method="POST" action="{{ route('storeProduct') }}">
     @csrf
     @method('POST')
     <div class="">
         <label class="" for="name"><h4>Name</h4></label>
         <div class="">
           <input type="text" class="" id="name" name="name">
         </div>
     </div>
     <div class="">
         <label class="" for="ingredients"><h4>Ingredients</h4></label>
         <div class="">
           <input type="text" class="" id="ingredients" name="ingredients">
         </div>
     </div>
      <div class="">
          <label class="" for="type"><h4>Type</h4></label>
          <div class="">
            <input type="text" class="" id="type" name="type">
          </div>
      </div>
      <div class="">
          <label class="" for="price"><h4>Price</h4></label>
          <div class="">
            <input type="text" class="" id="price" name="price">
          </div>
      </div>
      <div class="">
          <label class="" for="availability"><h4>Availability</h4></label>
          <div class="">
            <input type="text" class="" id="availability" name="availability">
          </div>
      </div>
      <div class="">
          <label class="" for="description"><h4>Description</h4></label>
          <div class="">
            <input type="text" class="" id="description" name="description">
          </div>
      </div>
      <button type="submit" class="">Submit</button>
   </form>

  </div>
  @endsection

    
      
