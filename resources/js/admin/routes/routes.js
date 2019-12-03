import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from '../components/Home/Home';
import Profiles from "../components/Profiles/Profiles";
import NewProfile from "../components/Profiles/NewProfile";
import Posts from "../components/News/Posts";
import NewPost from "../components/News/NewPost";

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
        },
        {
            path: '/admin/profile/:id',
            name: 'profile_show',
            component: NewProfile
        },
        {
            path: '/admin/news',
            name: 'news',
            component: Posts
        },
        {
            path: '/admin/posts/new',
            name: 'posts_new',
            component: NewPost
        }
    ]
});

export default router;
