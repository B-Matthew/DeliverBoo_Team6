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

  //   return view('pages.restaurateur');
  // }
  
  // public function filterSearch(Request $request) {
    
  //   $filter = Restaurant::WHERE('name' , $request)->get();
  //   return response() -> json($filter);
  // }

  public function homepage() {   

    $categories = Category::all();
    $restaurants = Restaurant::all();
    
    return view('pages.homepage', compact('categories' , 'restaurants'));
  }
     
  public function infoWebPage() {

    return view('pages.infoWebPage');
  }
}



    

    
    

  
  

