<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Restaurant;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories =[
            [
                'name' => 'Cinese',
            ],  
            [
                'name' => 'Giapponese',
            ],
            [
                'name' => 'Italiano',
            ],
            [
                'name' => 'Messicano',
            ],
            [
                'name' => 'Pizzeria',
            ],
            [
                'name' => 'Fast-Food',
            ],
            [
                'name' => 'Greco',
            ],
            [
                'name' => 'Indiano',
            ],
            [
                'name' => 'Paninoteca',
            ],
            [
                'name' => 'Vegetariano',
            ],
        ];
            
        // factory(Category::class, 15) -> create()
        // ->each(function($category){
        //     $restaurant = Restaurant::inRandomOrder()->limit(rand(1,3))->get(); 
        //     $category -> restaurants() -> attach($restaurant);
        //     $category -> save();   
        // });

        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }
    }
}

            
                  
            

           


              
            
            


