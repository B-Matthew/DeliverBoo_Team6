<?php

namespace App\Http\Controllers;
use App\Restaurant;
use App\Category;
use App\Product;
use Braintree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
  private function getValidation(){
    return [
      // @TODO regole di validazione
    ];
  }

  // Pagina Homepage
  public function homepage() {

      $categories = Category::all();
      $restaurants = Restaurant::all();
      
      // SELECT * FROM categories 
      //  JOIN category_restaurant 
      //  ON  category_restaurant=categories.id
      //   JOIN restaurants 
      // ON restaurants.id = category_restaurant.restaurant_id

      $filterJson = DB::table('categories')
                    ->join('category_restaurant' , 'category_restaurant.category_id' , '=' , 'categories.id')
                    ->join('restaurants' ,'restaurants.id' ,'=' , 'category_restaurant.restaurant_id')
                    ->get();
                  
      return view('pages.homepage', compact('categories' , 'restaurants','filterJson'));
    }

    // Pagina Menu ristorante
  public function clientRestaurant($id) {

    $restaurant = Restaurant::findOrFail($id);
    
    $antipasti= Product::WHERE('restaurant_id' ,'=' , $restaurant->id)->where('type', 'LIKE', 'antipasto')->get();
    
    $primi= Product::WHERE('restaurant_id' ,'=' , $restaurant->id)->where('type', 'LIKE', 'primo')->get();
    
    $secondi= Product::WHERE('restaurant_id' ,'=' , $restaurant->id)->where('type', 'LIKE', 'secondo')->get();

    $dolci = Product::WHERE('restaurant_id' ,'=' , $restaurant->id)->where('type', 'LIKE', 'dolce')->get();
                              
    return view('pages.Client.homeRestaurant', compact(
      'restaurant',
      'antipasti',
      'primi',
      'secondi',
      'dolci',
    ));
  }
    
  // Pagina Info web
  public function infoWebPage() {

    return view('pages.Client.infoWebPage');
  }

  // Pagina Faq
  public function faq() {

    return view('pages.Client.faq');
  }

  //Pagina Checkout
  public function checkout($id) {
    $totale = $id;
    $gateway = new Braintree\Gateway([
    'environment' => config('services.braintree.environment'),
    'merchantId' => config('services.braintree.merchantId'),
    'publicKey' => config('services.braintree.publicKey'),
    'privateKey' => config('services.braintree.privateKey')
    ]);

    $token = $gateway -> ClientToken() -> generate();
    return view('pages.Client.checkout', compact('token','totale'));
  }

  public function payment(Request $request) {

    $gateway = new Braintree\Gateway([
    'environment' => config('services.braintree.environment'),
    'merchantId' => config('services.braintree.merchantId'),
    'publicKey' => config('services.braintree.publicKey'),
    'privateKey' => config('services.braintree.privateKey')
    ]);
    
    
    $amount = $request -> amount;
    
    $result = $gateway->transaction()->sale([
        'amount' => $amount,
        'paymentMethodNonce' => 'fake-valid-nonce',
        'options' => [
            'submitForSettlement' => true
        ]
    ]);
    
    if ($result -> success) {
        $transaction = $result->transaction;
        // header("Location: " . $baseUrl . "transaction.php?id=" . $transaction->id);
        return back()->with('success_message','Transazione eseguita. L ID della transazione è: ' .$transaction -> id);
    } else {
        $errorString = "";

        foreach($result->errors->deepAll() as $error) {
            $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
        }

        // $_SESSION["errors"] = $errorString;
        // header("Location: " . $baseUrl . "index.php");
        return back()->withErrors('Si è verificato un errore: ' .$result -> message);
    }
  }
}

    
  

  

  
  
                
      
      
      
        
    
  
  
      


      
                
   

