@extends('layouts.main-layout')
@section('content')
    <main id="checkout">
        <section>

            @if (session('success_message'))
                <div>
                    {{session('success_message')}}
                </div>
            @endif

            @if (count($errors) > 0)
                <div>
                    <ul>
                        @foreach ($errors -> all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" id="payment-form" action="{{route('payment')}}">
                @csrf
                <fieldset>
                    <legend>Pagamento</legend>
                    <div>
                        <label for="name">Nome</label>
                        <input id="name" type="text" required autocomplete="name" autofocus>                    
                    </div>
    
                    <div>
                        <label for="lastname">Cognome</label>
                        <input id="lastname" type="text" required autocomplete="lastname" autofocus>                    
                    </div>
                    
                    <div>
                        <label for="address">indirizzo</label>
                        <input id="address" type="text" required autocomplete="address" autofocus>                    
                    </div>
    
                    <div>
                        <label for="email">Email</label>
                        <input id="name" type="email" required autocomplete="email" autofocus>                    
                    </div>
            
                    <div>
                        <label for="amount">
                            <span class="input-label">Amount</span>
                            <div class="input-wrapper amount-wrapper">
                                <input id="amount" name="amount" type="tel" min="1" placeholder="Amount" value="{{$totale}}" readonly>
                            </div>
                        </label>                  
                    </div>
                
                
                    <div class="bt-drop-in-wrapper">
                        <div id="bt-dropin"></div>
                    </div>
                    <button class="button" type="submit"><span>Test Transaction</span></button>
                </fieldset>  
            </form>
        </section>
    </main>
                
            
    <script src="https://js.braintreegateway.com/web/dropin/1.30.0/js/dropin.min.js"></script>
    <script>
        var form = document.querySelector('#payment-form');
        var client_token = "{{$token}}";

        braintree.dropin.create({
          authorization: client_token,
          selector: '#bt-dropin',
          
        }, function (createErr, instance) {
          if (createErr) {
            console.log('Create Error', createErr);
            return;
          }
        });
    </script>
@endsection
            

        

          