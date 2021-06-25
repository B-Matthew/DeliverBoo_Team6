<template>
     <section class="menu">

          <div class="aside-menu">

               <h2>Antipasti</h2>   
               <ul>
                    <li v-for="antipasto in antipasti">
                         {{ antipasto.name }}   
                    </li>
               </ul>   
       
               <h2>Primi</h2>
               <ul>
                    <li v-for="primo in primi">
                         {{ primo.name }}
                    </li>
               </ul>
    
            <h2>Secondi</h2>
            <ul>
               <li v-for="secondo in secondi">
                    {{ secondo.name }}   
               </li>
                
            </ul>

            <h2>Dolce</h2>   
               <ul>
                    <li v-for="dolce in dolci">
                         {{ dolce.name }}   
                    </li>
               </ul>   
        </div>

        <div class="container-menu">   

            <div class="products">
                <div>
                    <h2>Antipasti</h2>
    
                    <ul>
                         <li v-for="antipasto in antipasti">   
                              <div>
                                   <h3 :value="antipasto.name">{{ antipasto.name }}</h3> 
                                   <h5>{{ antipasto.ingredients }}</h5> 
                                   <p>{{ antipasto.description }}</p>
                                   <i @click="addProduct(antipasto.name, antipasto.price,antipasto.id)" class="fas fa-plus"></i>  
                              </div>   

                              <div class="image">
                                   <img :src="antipastoImg" alt=""> 
                                   <h4> 
                                   {{ antipasto.price }}    
                                   <i class="fas fa-euro-sign"></i>
                                   </h4>          
                              </div>
                         </li>            
                    </ul>
    
                    <h2>Primi</h2>
    
                    <ul>
                         <li v-for="primo in primi">   
                              <div>
                                   <h3>{{ primo.name }}</h3> 
                                   <h5>{{ primo.ingredients }}</h5> 
                                   <p>{{ primo.description }}</p>
                                   <i @click="addProduct(primo.name, primo.price,primo.id)"class="fas fa-plus"></i> 
                              </div>
                              
                              <div class="image">
                                   <img :src="primoImg" alt=""> 
                                   <h4> 
                                   {{ primo.price }}    
                                   <i class="fas fa-euro-sign"></i>
                                   </h4>      
                              </div>
                         </li>       
                    </ul>
       
                    <h2>Secondi</h2>
    
                    <ul>
                         <li v-for="secondo in secondi">   
                              <div>
                                   <h3>{{ secondo.name }}</h3> 
                                   <h5>{{ secondo.ingredients }}</h5> 
                                   <p>{{ secondo.description }}</p>
                                   <i @click="addProduct(secondo.name, secondo.price,secondo.id)" class="fas fa-plus"></i> 
                              </div>   

                              <div class="image">
                                   <img :src="secondoImg" alt=""> 
                                   <h4> 
                                   {{ secondo.price }}    
                                   <i class="fas fa-euro-sign"></i>
                                   </h4>          
                              </div>
                         </li>       
                    </ul>

                    <h2>Dolce</h2>

                    <ul>
                         <li v-for="dolce in dolci">   
                              <div>
                                   <h3>{{ dolce.name }}</h3> 
                                   <h5>{{ dolce.ingredients }}</h5> 
                                   <p>{{ dolce.description }}</p>
                                   <i @click="addProduct(dolce.name, dolce.price,dolce.id)" class="fas fa-plus"></i>  
                              </div>   

                              <div class="image">
                                   <img :src="antipastoImg" alt=""> 
                                   <h4> 
                                   {{ dolce.price }}    
                                   <i class="fas fa-euro-sign"></i>
                                   </h4>          
                              </div>
                         </li>            
                    </ul>
                </div>
            </div>
        </div>

        <div class="carrello">
             <form method="post" :action="routeSubmit">
            <input type="hidden" name="_token" v-bind:value="csrf">   
            <h2>Il tuo carrello</h2>   
            <ul v-for ="ordine in carrello">
                <li>
                    <span>{{ordine.prodotto}}</span>
                    <input type="text" name="product_id[]" v-model="ordine.id">
                    <div>
                         <span>{{ordine.prezzo}} </span>
                         <i class="fas fa-euro-sign"></i>
                    </div>
                </li>
            </ul>
    
            <h3>Totale</h3>
            <div class="totalePrezzo">
               <input type="text" name="price" v-model="totale">
               <span>{{totale}}</span>
               <i class="fas fa-euro-sign"></i>
            </div>
    
            <div>
                <button type="submit">Vai al pagamento</button>  
            </div>   
            </form>
        </div>
        
    </section>
</template>

<script>
    export default {
         data: function() {   
              return{
                   'antipastoImg': "../../../storage/img/antipasti.png",
                   'primoImg': "../../../storage/img/primi.png",
                   'secondoImg': "../../../storage/img/secondi.png",
                   'totale': 0,
                   'carrello': [],
                   'inputs' : {},
                   'errors' : {},
              }
          },
          props: ['antipasti','primi','secondi','dolci','checkout','routeSubmit','csrf'],

          methods: {
               
               addProduct: function(nomeProdotto, prezzoProdotto, idProdotto) {
                    let currentProduct = {
                        'prodotto': '',
                         'prezzo' : 0,
                         'id' :0,
                     };
                    currentProduct.prodotto = nomeProdotto;
                    currentProduct.prezzo = parseFloat(prezzoProdotto);
                    currentProduct.id = parseInt(idProdotto);
                    this.totale += currentProduct.prezzo;
                    this.carrello.push(currentProduct);
               },
          },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

               
               