
<script setup>
import Calculator from "./components/Calculator.vue";

components: {
  Calculator;
}
</script>

<template>
  <div id="calculator">
    <Calculator />
  </div>
</template>

<style scoped>
.center{
  margin: auto;
  text-align: center;
}
.p-calc{  
  font-size: 24px;
}
.flex {
    display: flex;
    align-items: center;
    align-items: stretch;
    flex-wrap: wrap
}

.flex-col {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
}

input {
    border: 2px solid darkgray !important;
    border-radius: 5px;
    text-align: center;
    font-size: 24px;
    height: 50px;
}

textarea {
    border: 2px solid darkgray !important;
    border-radius: 5px;
    text-align: center;
    font-size: 24px;
    max-width: 300px;   
  
}

#calculator{
    text-align: center;
}


</style>
