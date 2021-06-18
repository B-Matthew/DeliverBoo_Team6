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

  // public function restaurateur() {
  // public function chi_siamo() {

  //   return view('pages.chi_siamo');
  // }
  public function show() {
      $restaurants = Restaurant::all();
      return view('pages.show', compact(
        'restaurants'
      ));
    }

  public function restaurant($id) {
    $restaurant = Restaurant::findOrFail($id);
    return view('pages.restaurant', compact(
        'restaurant'
    ));
  }

  //   return view('pages.restaurateur');
  // }
  
  public function filterSearch(Request $request) {
    
    $filter = Restaurant::WHERE('name' , $request)->get();
    return response() -> json($filter);
  }

  public function homepage() {

    $name="Ciao Ale";

    $categories = Category::all();
    $restaurants = Restaurant::all();
    
    return view('pages.homepage', compact('categories' , 'restaurants'));

    return view('pages.homepage', compact('name', 'categories' , 'restaurants'));
  }
     
  public function infoWebPage() {

    return view('pages.infoWebPage');
  }
}

  
  
