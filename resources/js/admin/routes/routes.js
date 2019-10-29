import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '../components/Home/Home';
import Profiles from "../components/Profiles/Profiles";
import NewProfile from "../components/Profiles/NewProfile";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/admin',
            name: 'home',
            component: Home
        },
        {
            path: '/admin/profiles',
            name: 'profiles',
            component: Profiles
        },
        {
            path: '/admin/profiles/new',
            name: 'profiles_new',
            component: NewProfile
        }
    ]
});

export default router;
