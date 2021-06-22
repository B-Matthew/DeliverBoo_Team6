@extends('layouts.main-layout')
@section('content')
 <div class="show_div">
   
     <h1>Nuovo Piatto</h1>
   
   
   <form method="POST" action="{{ route('storeProduct', $restaurant -> id) }}">
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
          <select name="type" id="">
            <option value="Antipasto">Antipasto</option>
            <option value="Primo">Primo</option>
            <option value="Secondo">Secondo</option>
            <option value="Dolce">Dolce</option>
          </select>
      </div>
      <div class="">
          <label class="" for="price"><h4>Price</h4></label>
          <div class="">
            <input step=".01" type="number" class="" id="price" name="price">
          </div>
      </div>
      
      <div class="">
          <label class="" for="description"><h4>Description</h4></label>
          <div class="">
            <textarea id="description" name="description" id="" cols="30" rows="10"></textarea>
          </div>
      </div>
      <button type="submit" class="">Submit</button>
   </form>

  </div>
  @endsection
            

    
      
