<?php

namespace App\Http\Controllers;
use App\Restaurant;
use App\Category;
use App\Product;
use App\Order;
use Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\RestaurantRequest;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  // public function __construct() 
  // {
  //   $this->middleware('auth');
  // }

  // Dashboard del ristoratore
  public function dashBoard() 
  { 
    $user = Auth::user();
    $categories = Category::all();
    return view('pages.Admin.dashBoard', compact('user','categories'));
  }
  
   //  Delete Reastaurant
   public function deleteRestaurant($id) 
   {
     $restaurant = Restaurant::findOrFail($id);
     $restaurant -> deleted = true;
     $restaurant -> save();
     return redirect()-> route('dashBoard');
    }


   public function editRestaurant($id) 
   {
     $restaurant= Restaurant::findOrFail(Crypt::decrypt($id));
      $categories = Category::all();
      return view ('pages.Admin.editRestaurant', compact('restaurant','categories'));
    }

    public function updateRestaurant(RestaurantRequest $request, $id) 
    {
      $data = $request->all();
      
      if(!empty($data['img'])){
      $img = $data['img'];
      $imgExt = $img -> getClientOriginalExtension();
      $imgNew = time() . '_restaurtant-img.' .$imgExt;
      $folder = '/restaurant-img/';
      $imgFile = $img -> storeAs($folder , $imgNew, 'public');
     }else {
       $imgNew = 'carne3.png';
     }
      
      $restaurant = Restaurant::findOrFail($id);
      $restaurant -> img = $imgNew;
      $restaurant -> categories() -> sync($data['categories']);
      $restaurant -> update($data);
      return redirect() -> route('dashBoard');
      
    }
      
      
    // Aggiunta ristorante nella dashboard
    public function storeRestaurant(RestaurantRequest $request)
    {
      $data = $request->all();
      
      if(!empty($data['img'])){
        $img = $data['img'];
        $imgExt = $img -> getClientOriginalExtension();
        $imgNew = time() . '_restaurtant-img.' .$imgExt;
        $folder = '/restaurant-img/';
        $imgFile = $img -> storeAs($folder , $imgNew, 'public');
       }else {
         $imgNew = 'carne3.png';
       }
      
       $data['user_id'] = Auth::id();
       $restaurant = new Restaurant();
       $restaurant->fill($data);
       $restaurant -> img = $imgNew;
       $restaurant->save();
       
       $restaurant -> categories() -> sync($data['categories']);
       $restaurant->save();
    
       return redirect() -> route('dashBoard');
     }
  
   
  
    //  Pagina prodotti del ristorante
    public function myProduct($id) 
    {
      // Decripting dell'url
      $restaurant = Restaurant::findOrFail(Crypt::decrypt($id));
      // Controllo sull'user loggato
      if (! Gate::allows('userRoute', $restaurant)) {
              abort(403);
          }
  
      return view('pages.Admin.myProducts', compact('restaurant'));
    }
  
    // Funzione per view per creare piatto
    public function createProduct($id) 
    {
      $restaurant = Restaurant::findOrFail(Crypt::decrypt($id));
      if (! Gate::allows('userRoute', $restaurant)) {
              abort(403);
        }
      return view('pages.Admin.createProduct', compact('restaurant'));
    } 
  
    // Funzione per creare piatto
    public function storeProduct(ProductRequest $request, $id)
    {
      $data = $request->all();
      $restaurant = Restaurant::findOrFail($id);
      
      $product = new Product();
      $product-> fill($data);
      $product -> restaurant() -> associate($restaurant -> id);
      $product-> save();
      
      return redirect() -> route('myProduct', encrypt($restaurant -> id));
    }
      
    // Funzione per view per editare il piatto
    public function editProduct($id)
    {
      $product = Product::findOrFail(Crypt::decrypt($id));
      return view('pages.Admin.editProduct', compact('product'));
    }
      
    // Funzione per editare il piatto da sistemare
    public function updateProduct(ProductRequest $request, $id)
    {
      $data = $request->all();
      $product = Product::findOrFail($id);
      $restaurant = $product -> restaurant_id;
      $product -> update($data);
      return redirect() -> route('myProduct', encrypt($restaurant));
    }
  
    //  Funzione per cancellare i prodotti 
    public function deleteProduct($id)
    {
      $product = Product::findOrFail($id);
      $restaurant = $product -> restaurant_id;
      $product->delete();
      return redirect() -> route('myProduct', encrypt($restaurant));
    }
  }
      
    
  
    
      
      
    
      
        
  
  
  
  
  
  
  
  
  
    
  
      
  
  
  
  
      
  
  
      
  
      
      
  
      
      
      
  
      
  
       
      


  
