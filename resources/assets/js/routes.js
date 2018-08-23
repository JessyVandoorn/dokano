import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./components/Home.vue'),
        name: 'home'
    },
    {
        path: '/instellingen',
        component: require('./components/Instellingen.vue'),
        name: 'instellingen'
    }
    ,
    {
        path: '/inkomsten',
        component: require('./components/Inkomsten.vue'),
        name: 'inkomsten'
    }
        ];

export default new VueRouter({
    routes
});