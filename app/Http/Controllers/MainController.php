<?php

namespace App\Http\Controllers;
use App\Restaurant;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

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
      return view('pages.homepage', compact('categories' , 'restaurants'));
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

}
  

  

  
  
                
      
      
      
        
    
  
  
      


      
                
   

