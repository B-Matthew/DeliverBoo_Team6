<template>
     <section id="categories">
          <h2 @click="getCategoryId">Cosa vuoi mangiare?</h2>
          <input v-if="typeOfFoods.length == 0 " class="searchbar" v-model="restaurantInput" @keyup="filter()" text="" placeholder="Ricerca ristorante. . .">
          <ul v-if="restaurantInput == '' " class="typeOfFoods">
               <li :class="(typeOfFoods.includes(category.id)) ? 'checkbox-active' : ''" v-for="(category, index) in categories" :value="category.name"> 
                   <input  v-model="typeOfFoods" class="checkbox" type="checkbox" :value="category.id">
                   <span>{{category.name}}</span>
               </li>
          </ul>

          
          
          <!-- Ciclare solo 6 ristoranti  -->
          <ul v-if="restaurantInput == '' && typeOfFoods.length == 0" class="restaurants">
               <li v-for="(restaurant, index) in restaurants" v-if="index < 6">
                         <!-- <img src="{{asset('storage/img/sushi.jpg')}}" alt=""> -->
                    <a :href="route + restaurant.id">
                         <h3>
                              {{restaurant.name}}                              
                         </h3>
                         <div>
                              <img :src="image" alt=""> 
                         </div>
                    </a> 
               </li>
          </ul>

          <ul v-else-if="restaurantInput == '' && typeOfFoods.length != 0" class="restaurants">
               <li v-for="(restaurant, index) in categoryFilter()" >
                         <!-- <img src="{{asset('storage/img/sushi.jpg')}}" alt=""> -->
                    <a :href="route + restaurant.id">
                         <h3>
                              {{restaurant.name}}                              
                         </h3>
                         <div>
                              <img :src="image" alt=""> 
                         </div>
                    </a> 
               </li>
          </ul>
          
          <!-- Ciclare tutti i ristoranti filtrati per nome -->
          <ul v-else class="restaurants">
               <li v-for="restaurant in filter()">
                    <a :href="route + restaurant.id">
                    <!-- <img src="{{asset('../../storage/app/public/img/rider.jpg')}}" alt=""> -->
                         <h3>{{restaurant.name}}</h3>
                         <div>
                              <img :src="image" alt=""> 
                         </div>      
                    </a>
               </li>
          </ul>         
     </section>            
           
</template>   

<script>
    export default {
        name: 'SearchComponent',
         data: function() {   
              return{
                   'restaurantInput': '',
                   'categoryId': false,
                   'typeOfFoods': [],
                   'image': "../../../storage/img/sushi.jpg",
              }
          },
          props: ['restaurants','categories','route','categoryRestaurant'],

          methods: {
               filter: function() {
                    const filteredRestaurants = this.restaurants.filter(element => element.name.toLowerCase().includes(this.restaurantInput.toLowerCase()));
                    return filteredRestaurants;
               },

               getCategoryId: function() {
                    console.log(this.typeOfFoods);
               },

               categoryFilter: function() {
                    const filteredCategory = [];
                    const restaurant = [];
                    let category_id;
                    let restaurant_id;
                    
                    for (let i = 0; i < this.categoryRestaurant.length; i++) {
                         const element = this.categoryRestaurant[i];
                         category_id = element.category_id;
                         restaurant_id = element.id;

                         if (this.typeOfFoods.includes(category_id) && !restaurant.includes(restaurant_id)) {
                              filteredCategory.push(element);
                              restaurant.push(restaurant_id);
                         }
                    }
                              
                    console.log(filteredCategory);
                    return filteredCategory;
               },
          },
        
        mounted() {
            console.log(this.restaurants);
            console.log(this.categories);
        }
     } 
</script>
                    
                         
        
              
                   
                    
              
                         
                    
                    
               
                         
                         
