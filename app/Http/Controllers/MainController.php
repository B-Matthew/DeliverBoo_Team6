<?php

namespace App\Http\Controllers;
use App\Restaurateur;
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
  public function chi_siamo() {
    return view('pages.chi_siamo');
  }
  public function restaurateur() {
    return view('pages.restaurateur');
  }
  public function restaurateur() {
    $restaurateur = Restaurateur::where('deleted', false) -> get();
    return view('pages.home', compact(
      'restaurateur'
    ));
  }
}
