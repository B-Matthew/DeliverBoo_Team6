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

  // public function chi_siamo() {

  //   return view('pages.chi_siamo');
  // }

  // public function restaurateur() {

  //   return view('pages.restaurateur');
  // }

  public function homepage() {

    $name="Ciao Ale";
    
    $categories = Category::all();
    $restaurants = Restaurant::all();
    
    return view('pages.homepage', compact('name', 'categories' , 'restaurants'));
  }
}

  
  
