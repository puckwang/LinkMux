import Vue from 'vue';
import Index from "./pages/Index";
import VueRouter from "vue-router";
import Router from 'vue-router';
import Meta from 'vue-meta';

Vue.use(Router);
Vue.use(Meta);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Index
        },
        {
            path: '*',
            component: Index
        }
    ]
});

export default router;