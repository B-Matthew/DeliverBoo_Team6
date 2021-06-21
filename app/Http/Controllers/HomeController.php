<?php

namespace App\Http\Controllers;
use App\Restaurant;
use App\Category;
use App\Product;
use Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\RestaurantRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function __construct() 
  {
    $this->middleware('auth');
  }

  // Dashboard del ristoratore
  public function dashBoard() 
  { 
    $user = Auth::user();
    $categories = Category::all();
    return view('pages.dashBoard', compact('user','categories'));
  }
  
  // Aggiunta ristorante nella dashboard
  public function storeRestaurant(RestaurantRequest $request)
  {
    if($request->hasFile('img')){
      $img = $request -> file('img');
      $imgExt = $img -> getClientOriginalExtension();
      $imgNew = time() . '_restaurtant-img.' .$imgExt;
      $folder = '/restaurant-img/';
      $imgFile = $img -> storeAs($folder , $imgNew, 'public');
     }else {
       $imgNew = 'carne3.png';
     }
    
     $data = $request->all();
     $data['user_id'] = Auth::id();
     $restaurant = new Restaurant();
     $restaurant->fill($data);
     $restaurant -> img = $imgNew;
     $restaurant->save();
     
     $restaurant -> categories()->attach($request -> get('category_id'));
     $restaurant->save();
  
     return redirect() -> route('dashBoard');
   }

  //  Pagina prodotti del ristoranti
  public function myProduct($id) 
  {
    // Decripting dell'url
    $restaurant = Restaurant::findOrFail(Crypt::decrypt($id));
    // Controllo sull'user loggato
    if (! Gate::allows('userRoute', $restaurant)) {
            abort(403);
        }

        return view('pages.myProducts', compact('restaurant'));
      }

  // Funzione per view per creare piatto
  public function createProduct($id) 
  {
    $restaurant = Restaurant::findOrFail(Crypt::decrypt($id));
    if (! Gate::allows('userRoute', $restaurant)) {
            abort(403);
      }
      return view('pages.createProduct');
  } 

  // Funzione per creare piatto
  public function storeProduct(Request $request)
  {
    // $validate = $request -> validate($this -> getValidate());
    // $product = Product::create();  //create($validate)
    $product = new Product([
        "name" => $request->get("name"),
        "ingredients" => $request->get("ingredients"),
        "description" => $request->get("description"),
        "type" => $request->get("type"),
        "price" => $request->get("price"),
        "availability" => $request->get("availability"),
        "restaurant_id" => $request->get("restaurant_id"),
    ]);
    
    $product->save();
    return redirect() -> route('product', $product -> id);
  }

  // Funzione per view per editare il piatto
  public function editProduct($id)
  {
    $product = Product::findOrFail(Crypt::decrypt($id));
    
    return view('pages.editProduct', compact('product',));
  }
      
// Funzione per editare il piatto
  public function update(Request $request, $id)
  {
    // $validate = $request -> validate($this -> getValidate());
    $resturant = Restaurant::findOrFail($id);
    $resturant -> update(); //update($validate)
    $resturant -> category() -> associate($request -> category_id);
    $resturant -> save();
    $resturant -> products() -> sync($request -> product_id);
    return redirect() -> route('resturant');
  }

  public function destroyRestaurant($id)
  {
    $resturant = Restaurant::findOrFail($id);
    $resturant -> deleted = true;
    $resturant -> save();
    return redirect() -> route('resturant');
  }

}








  

    




    


    

    
    

    
    
    

    

     
    

