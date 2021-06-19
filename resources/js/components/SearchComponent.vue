<template>
     <section id="categories">
          <h2>Cosa vuoi mangiare?</h2>
          <input v-model="restaurantInput" @keyup="filter()" text="" placeholder="Ricerca ristorante. . .">
          <ul class="typeOfFoods">
               <li v-model ="categoryInput" v-for="category in categories" :value="category.name" @click="getCategory(category.name)"> 
                    {{ category.name }}
               </li>
          </ul>

          <ul>
               <li v-for=""></li>
          </ul>
          
          <!-- Ciclare solo 6 ristoranti  -->
          <ul v-if="restaurantInput == '' " class="restaurants">
               <li v-for="(restaurant, index) in restaurants" v-if="index < 6">
                    <!-- <img src="{{asset('storage/img/sushi.jpg')}}" alt=""> -->
                    <h3>
                         <a href="">
                              {{restaurant.name}}
                         </a>
                    </h3>
               </li>
          </ul>

          <!-- Ciclare tutti i ristoranti filtrati per nome -->
          <ul v-else class="restaurants">
               <li v-for="restaurant in filter()">
                    <!-- <img src="{{asset('storage/img/sushi.jpg')}}" alt=""> -->
                    <h3>{{restaurant.name}}</h3>
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
                   'categoryInput': 'all',
              }
          },
          props: ['restaurants','categories'],

          methods: {
               filter: function() {
                    const filteredRestaurants = this.restaurants.filter(element => element.name.toLowerCase().includes(this.restaurantInput.toLowerCase()));
                    return filteredRestaurants;
               },

               getCategory: function(categoryName) {
                    this.categoryInput = categoryName;
                    console.log(this.categoryInput);
               }
          },
        
        mounted() {
            console.log(this.restaurants);
            console.log(this.categories);
        }
     } 
</script>