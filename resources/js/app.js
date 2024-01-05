// Import Vue and other dependencies
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import App from './App.vue';
import Vueaxios from 'vue-axios';
import axios from 'axios';

// Import your routes from routes.js
import routes from './routes';

// Create the Vue app instance
const app = createApp(App);

// Use VueSweetalert2, Vueaxios, and axios

app.use(Vueaxios, axios);

// Register global components
import Layanan from './components/Layanan.vue';
import Contact from './components/Footer.vue';
import Navigasi from './components/Navigasi.vue';
import Footer from './components/Footer.vue';

import Payment from "./components/Payment.vue";
import Summary from "./components/Summary.vue";
import Alert from "./components/Alert.vue";
import Item from "./components/Item.vue";

app.component('Item', Item);
app.component('Payment', Payment);
app.component('Summary', Summary);
app.component('Navigasi', Navigasi);
app.component('Footer', Footer);
app.component('Alert', Alert);

// Create the router instance
const router = createRouter({
  history: createWebHistory(),
  routes,
});

// Mount the app with the router
app.use(router).mount('#app');
