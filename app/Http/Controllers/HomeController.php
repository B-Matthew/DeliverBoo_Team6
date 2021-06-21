<?php

namespace App\Http\Controllers;
use App\Restaurant;
use App\Category;
use App\Product;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function __construct() 
  {
    $this->middleware('auth');
  }

  public function dashBoard() 
  {
    $user = Auth::user();
    $categories = Category::all();
    return view('pages.dashBoard', compact('user','categories'));
  }
    
  public function storeRestaurant(Request $request)
  {

    $validated = $request -> validate ([
      'name' => 'string|required|min:3',
      'address' => 'string|required|min:3',
      'city' => 'string|required|min:3',
      'telephone' => 'numeric|required|min:5',
      'pIva' => 'string|required|min:5',
      'img' => 'nullable|mimes:jpg,bmp,png,jpeg',
    ]);
     
    // if($request->hasFile('img')){
    //   $img = $request -> file('img');
    //   dd(' cè immagine');
    //  }else {

    //   dd('non cè immagine');
    // }

    $restaurant = Restaurant::make($validated);

    $userCurrent = Auth::user()->id;
    $restaurant -> user()->associate($userCurrent);
    $restaurant -> save();

    $restaurant -> categories()->attach($request -> get('category_id'));
    $restaurant->save();

    return redirect() -> route('dashBoard');
  }

  public function createProduct() 
  {
    return view('pages.createProduct');
  }

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

  public function edit($id)
  {
    $resturant = Restaurant::findOrFail($id);
    $product = Product::all();
    $category=Category::all();
    return view('pages.edit', compact(
      'resturant',
      'product',
      'category'
    ));
  }

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





  

    




    


    

    
    

    
    
    
