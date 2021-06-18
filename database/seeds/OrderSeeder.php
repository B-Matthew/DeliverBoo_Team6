<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\Product;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Order::class, 20) -> create()
        ->each(function($order){
            $product = Product::inRandomOrder()->limit(rand(2,5))->get(); 
            $order -> products() -> attach($product);
            $order -> save();   
        });
    }
}
