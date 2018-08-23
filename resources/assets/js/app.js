
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import VueRouter from 'vue-router';
import router from './routes';
import VeeValidate from 'vee-validate';
import vSelect from 'vue-select';
import Vue from 'vue';
import Sortable from 'vue-sortable';

window.Vue = require('vue');
Vue.use(VueRouter);
Vue.use(VeeValidate);
Vue.component('v-select', vSelect);
Vue.use(Sortable);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    router,
});
