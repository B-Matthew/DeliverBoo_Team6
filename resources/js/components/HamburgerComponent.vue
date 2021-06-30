<template>
     <li class="hamburger-menu">
               <button class="hamburger" @click="switchHamburger()">
                    <div></div>
                    <div></div>
                    <div></div>
               </button>
               <ul :class ="hambugerFlag == true ? 'show' : '' " class="dropdown-menu">
                    <slot></slot>
               </ul>
          </li>
</template>


<script>
     export default {
          data: function() {
            return {
                "hambugerFlag": false,
            }
          },

          methods: {

               switchHamburger : function() {

                    this.hambugerFlag = !this.hambugerFlag;

               }
          },
          mounted() {

               console.log('Component mounted.')
          }
    }
</script>