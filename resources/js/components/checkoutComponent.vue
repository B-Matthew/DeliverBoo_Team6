<template>
    <div>
        <label for="Totale">
            <span class="input-label">Totale</span>
            <div class="input-wrapper amount-wrapper">
                <input type="hidden" id="amount" name="amount" placeholder="Amount" :value="tot">
                <p>€ {{tot}}</p>
            </div>
        </label>
        <ul>
            <li v-for="prodotto in prodotti">
                <input type="hidden" name="product_id[]" id="" :value="prodotto.id">
            </li>
        </ul>               
    </div>
</template>
    
<script>
    export default {
        data: function() {
            return {
                tot: localStorage.getItem('totale'),
                prodotti: JSON.parse(localStorage.getItem("prodotti")),
            }
        },
        mounted() {
            console.log('Component mounted.');
            console.log(this.prodotti);
        }
    }
</script>
    
    

                
            
                
            
            
            