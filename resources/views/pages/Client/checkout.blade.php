@extends('layouts.main-layout')
@section('content')
    <main style="padding-top: 200px; margin: auto; width:70%;">
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

        <h2>Form Pagamento: </h2>
        <form method="post" id="payment-form" action="{{route('payment')}}">
            @csrf
            <section>
                <label for="amount">
                    <span class="input-label">Amount</span>
                    <div class="input-wrapper amount-wrapper">
                        <input id="amount" name="amount" type="tel" min="1" placeholder="Amount" value="10">
                    </div>
                </label>

                <div class="bt-drop-in-wrapper">
                    <div id="bt-dropin"></div>
                </div>
            </section>
            <button class="button" type="submit"><span>Test Transaction</span></button>
        </form>
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
            

        

          