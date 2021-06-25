@extends('layouts.main-layout')
@section('content')
    <main id="edit-restaurant">
        
        <form method="POST" action="{{route('updateRestaurant', $restaurant -> id)}}" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <fieldset class="">
                <legend>
                    Modifica i dati del tuo ristorante
                </legend>
                <label for="name">Nome Ristorante</label>
                <input type="text" class="" id="name" name="name" placeholder="Inserisci il nome.." value="{{$restaurant -> name}}">
                <label for="city">Città</label>
                <input type="text" class="" id="città" name="city" placeholder="Inserisci la città.." value="{{$restaurant -> city}}">
                <label for="address">Indirizzo</label>
                <input type="text" class="" id="address" name="address" placeholder="Inserisci l'indirizzo.." value="{{$restaurant -> address}}">
                <label for="telephone">Recapito telefonico</label>
                <input type="text" class="" id="telephone" name="telephone" placeholder="Inserisci il numero.." value="{{$restaurant -> telephone}}">
                <label for="pIva">Partita Iva</label>
                <input type="text" class="" id="pIva" name="pIva" placeholder="Inserisci la partita Iva.." value="{{$restaurant -> pIva}}">
                <label for="img">Immagine del tuo ristorante</label>
                <input id="my-file" type="file" name="img" style="display: none">   
                <a id="myfilebutton" onclick="document.getElementById('my-file').click()">Scegli qui il tuo file</a>

                <ul>
                    @foreach ($categories as $category)
                    <li>   
                        <input id="category" class="checkbox-effect checkbox-effect-4" type="checkbox" name="categories[]" value="{{$category -> id}}">
                        <label for="category">{{$category->name}}</label>
                    </li>      
                    @endforeach
                </ul>      
                <button type="submit">Update</button>
            </fieldset>
        </form>
    </main>   
@endsection