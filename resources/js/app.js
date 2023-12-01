require('./bootstrap');

window.Vue = require('vue').default;

import PrimeVue from 'primevue/config';
Vue.use(PrimeVue);
import Button from "primevue/button";
Vue.use(Button);
import InputText from 'primevue/inputtext';
Vue.use(InputText);
import {PrimeIcons} from "primevue/api";
Vue.use(PrimeIcons);
import PortalVue from 'portal-vue'
Vue.use(PortalVue)
import Chart from 'primevue/chart';
Vue.use(Chart)
import PanelMenu from 'primevue/panelmenu';
Vue.use(PanelMenu)
import Skeleton from "primevue/skeleton/Skeleton";
Vue.use(Skeleton)
import DataTable from "primevue/datatable/DataTable";
Vue.use(DataTable)

/*******************Themes**************/
import "primevue/resources/themes/saga-blue/theme.css";
import 'primevue/resources/primevue.min.css';
import 'primeicons/primeicons.css';

/*******************Axios**************/
import axios from 'axios';
Vue.prototype.$http = axios;

import Vue from 'vue';
Vue.component('home', require('./components/Index.vue').default);
Vue.component('form-user-create', require('./components/FormUser/FormUserCreate.vue').default);
Vue.component('sotrudnik-create', require('./components/Sotrudnik/SotrudnikCreate.vue').default);

const app = new Vue({
    el: '#app',
});

