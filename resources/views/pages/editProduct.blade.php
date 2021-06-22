@extends('layouts.main-layout')
@section('content')

<div id="editProduct">

  <form method="POST" action="{{ route('updateProduct') }}">
    @csrf
    @method('POST')

    <fieldset>
        <legend>Modifica Il Tuo Piatto</legend>

        <label class="" for="name">
            <h4>Name</h4>
        </label>
        <input type="text" class="" id="name" name="name" value="{{ $product -> name }}">

        <label class="" for="ingredients">
            <h4>Ingredients</h4>
        </label>
        <input type="text" class="" id="ingredients" name="ingredients" value="{{ $product -> ingredients }}">

        <label class="" for="type">
            <h4>Type</h4>
        </label>
        <select name="type" id="type-food" selected="{{ $product -> type }}">
            <option value="Antipasto">Antipasto</option>
            <option value="Primo">Primo</option>
            <option value="Secondo">Secondo</option>
            <option value="Dolce">Dolce</option>
        </select>

        <label class="" for="price">
            <h4>Price</h4>
        </label>
        <input step=".01" type="number" class="" id="price" name="price" value="{{ $product -> price }}">

        <label class="" for="description">
            <h4>Description</h4>
        </label>
        <textarea id="description" name="description" id="" cols="30" rows="10"></textarea value="{{ $product -> description }}">

        <button type="submit" class="">Submit</button>
    </fieldset>
  </form>
           
</div>     
@endsection   











          
      
        
