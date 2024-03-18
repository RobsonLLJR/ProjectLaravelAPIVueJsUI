import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import axios from 'axios';
import VueAxios from 'vue-axios';
import VueSweetalert2 from 'vue-sweetalert2';
import './assets/main.css';
const app = createApp(App)

app.use(router)
app.use(VueAxios, axios)
app.use(VueSweetalert2)
app.mount('#app')