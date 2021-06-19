@extends('layouts.main-layout')
@section('content')
 <div class="show_div">
   <div class="">
     <h1>Nuovo Piatto</h1>
   </div>
   <form method="POST" action="{{ route('storeProduct') }}">

     @csrf
     @method('POST')
     <div class="">
         <label class="" for="name"><h4>Name</h4></label>
         <div class="">
           <input type="text" class="" id="name" name="name" placeholder="Name">
         </div>
     </div>
     <div class="">
         <label class="" for="ingredients"><h4>Ingredients</h4></label>
         <div class="">
           <input type="text" class="" id="ingredients" name="ingredients" placeholder="Ingredients">
         </div>
     </div>
      <div class="">
          <label class="" for="type"><h4>Type</h4></label>
          <div class="">
            <input type="text" class="" id="type" name="type"placeholder="Type">
          </div>
      </div>
      <div class="">
          <label class="" for="price"><h4>Price</h4></label>
          <div class="">
            <input type="text" class="" id="price" name="price"placeholder="Price">
          </div>
      </div>
      <div class="">
          <label class="" for="availability"><h4>Availability</h4></label>
          <div class="">
            <input type="text" class="" id="availability" name="availability"placeholder="Availability">
          </div>
      </div>
      <div class="">
          <label class="" for="restaurant_id"><h4>Resturant id</h4></label>
          <div class="">
            <input type="text" class="" id="restaurant_id" name="restaurant_id"placeholder="Resturant id">
          </div>
      </div>
      <div class="">
          <label class="" for="description"><h4>Description</h4></label>
          <div class="">
            <input type="text" class="" id="description" name="description"placeholder="Description">
          </div>
      </div>
      <button type="submit" class="">Submit</button>
   </form>
 </div>
@endsection
