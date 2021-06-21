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
  public function clientRestaurant() {

    return view('pages.homeRestaurant');
  }

  public function show() {
      $restaurants = Restaurant::all();
      $products = Product::all();
      return view('pages.show', compact(
        'restaurants',
        'products'
      ));
    }
    
  public function product($id) {
    $product = Product::findOrFail($id);
    return view('pages.product', compact(
        'product'
    ));
  }

  

  public function infoWebPage() {

    return view('pages.infoWebPage');
  }

  public function faq() {

    return view('pages.faq');
  }
}
  
