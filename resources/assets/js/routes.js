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
    },
    {
        path:'/persoon',
        component: require('./components/customer/Persoon.vue'),
        name: 'persoon'
    },
    {
        path:'/overzicht',
        component: require('./components/customer/Overzicht.vue'),
        name: 'overzicht'
    },
    {
        path: '/boeken/:id',
        component: require('./components/customer/Boeken.vue'),
        name: 'boeken'
    }
        ];

export default new VueRouter({
    routes
});