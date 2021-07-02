
<script>
import { Line } from 'vue-chartjs';

export default {
   extends: Line,
   data() {
      return {
         datacollection: {
            labels: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
            datasets: [{
               label: 'Numero Ordini per anno',
               backgroundColor: '#25385f',
               pointBackgroundColor: 'yellow',
               borderWidth: 3,
               pointBorderColor: '#25385f',   
               data: this.getMonth(),
               
            },{
            label: 'Incasso',
               backgroundColor: '#ffc244',
               pointBackgroundColor: '#25385f',
               borderWidth: 3,   
               pointBorderColor: '#ffc244',
               
               data: this.getPrice(),
               }
            ]
         },
         
         options: {
            scales: {
               yAxes: [{
                  ticks: {
                     beginAtZero: true
                  },
                  gridLines: {
                     display: true
                  }
               }],
               xAxes: [{   
                  gridLines: {
                     display: true
                  }
               }]
            },
            legend: {
               display: true
            },
            responsive: true,
            maintainAspectRatio: false
         }
            
      }
               
   },
   props : ['orders','amount'],
   methods: {
      getMonth: function() {
         let year = new Date().getFullYear();
         let arr1 = [];
         let arr2 = [];
         for (let i = 0; i < this.orders.length; i++) {
            const element = this.orders[i];
            const month = element.month;
            if (year == element.year) {
               
               arr2.push(month);
            }
          }
      arr2.forEach(function (x) { arr1[x] = (arr1[x] || 0) + 1; });
      console.log(arr1);
      return arr1;
      },

      getPrice : function () {
         
         
         console.log(arr2);
         return arr2;
      }
            
               
         

     
      
      
   },
   mounted() {
      // console.log(this.orders);
      console.log(this.amount);
      this.renderChart(this.datacollection, this.options);
   }
}
</script>
         
      
               
            
           
            
         



            

         
