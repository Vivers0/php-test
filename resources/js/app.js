import './bootstrap';

window.Vue = require('vue').default

// Themes
import BootstrapVue from 'bootstrap-vue';
Vue.use(BootstrapVue);
import 'bootstrap-vue/dist/bootstrap-vue.css';


import App from './App.vue'
createApp(App).mount("#app")