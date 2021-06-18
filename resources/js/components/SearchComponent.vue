<template>
     <section id="categories">
          <h2>Cosa mangerai oggi?</h2>
          <input v-model="searchInput" @keyup="filter()" text="" placeholder="Ricerca ristorante. . .">
          <ul class="typeOfFoods">
               <li v-for="category in categories"> 
                    {{ category.name }}
               </li>
          </ul>
          
          <!-- Ciclare solo 6 ristoranti  -->
          <ul v-if="searchInput == '' " class="restaurants">
               <li v-for="(restaurant, index) in restaurants" v-if="index < 6">
                    <!-- <img src="{{asset('storage/img/sushi.jpg')}}" alt=""> -->
                    <h3>{{restaurant.name}}</h3>
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
                   'searchInput': '',
              }
          },
          props: ['restaurants','categories'],

          methods: {
               filter: function() {
                    const filteredRestaurants = this.restaurants.filter(element => element.name.toLowerCase().includes(this.searchInput.toLowerCase()));
                    return filteredRestaurants;
               }
          },
        
        mounted() {
            console.log(this.restaurants);
        }
     } 
</script>