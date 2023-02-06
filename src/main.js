import  { createApp } from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import App from './App.vue'
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap"
import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";


import './assets/index.css'




 createApp(App).use(Toast).mount('#apps')


