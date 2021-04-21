import Vue from 'vue';
import VueRouter from 'vue-router';

import Animals from './components/animals';
import Home from './components/home';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes:[
        {
            path: '/',
            component: Home,
        },
        {
            path: '/api/animals',
            component: Animals,
        }
    ]
});

export default router;