<template>
    <div class="text">
          <h2>I tuoi piatti preferiti, a domicilio.</h2>
          <h3>Ricerca subito il tuo ristorante preferito.</h3>
          <input v-model="searchInput" @keyup="hello()" text="" placeholder="Ricerca ristorante. . .">
     </div>
</template>

<script>
    export default {
        name: 'SearchComponent',
         data: function() {
              return{
                   'searchInput': '',
              }
          },

          methods: {
               hello: function() {
                    console.log(this.searchInput);
               }
          },
        
        mounted() {
            console.log('list mounted.')
        }
     } 
</script>