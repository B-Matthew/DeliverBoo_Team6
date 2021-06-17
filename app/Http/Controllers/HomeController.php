<?php

namespace App\Http\Controllers;
use App\Restaurateur;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
      return view('home');
    }
    public function loggedPage() {
      return view('pages.logged-in');
    }
    public function create(){
    return view('pages.create');
  }
  public function store(Request $request){
    $validate = $request -> validate($this -> getValidate());
    $restaurateur = Restaurateur::create($validate);
    return redirect() -> route('restaurateur', $restaurateur -> id);
  }
    public function edit($id){
      $restaurateur = Restaurateur::findOrFail($id);
      $product = Product::all();
      $category=Category::all();
      return view('pages.edit-restaurateur', compact(
        'restaurateur',
        'product',
        'category'
      ));
    }
    public function update(Request $request, $id){
      $validate = $request -> validate($this -> getValidate());
      $restaurateur = Restaurateur::findOrFail($id);
      $restaurateur -> update($validate);

      $restaurateur -> category() -> associate($request -> category_id);
      $restaurateur -> save();
      $restaurateur -> products() -> sync($request -> product_id);

      return redirect() -> route('restaurateur');
    }
    public function delete($id){
    $restaurateur = Restaurateur::findOrFail($id);
    $restaurateur -> deleted = true;
    $restaurateur -> save();
    return redirect() -> route('restaurateur');
  }
}
