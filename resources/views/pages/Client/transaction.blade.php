@extends('layouts.main-layout')
@section('content')
    <main id="transaction" >
        {{-- <h2 style="padding: 300px 0;">Ciao {{$transaction}}</h2>    --}}
        <div>
            <h2>PERFETTO LA TUA TRANSAZIONE É ANDATA A BUON FINE</h2>
            
            <h3>id transazione : {{$transaction}}</h3>

            <h2>IL TUO ORDINE É IN PREPARAZIONE</h2>
        </div>    
    </main>   
@endsection   