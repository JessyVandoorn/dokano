import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./components/Home.vue'),
        name: 'home'
    }
        ];

export default new VueRouter({
    routes
});