import { createWebHistory, createRouter } from "vue-router";
import store from '../store';

import HomeView from '@/pages/HomeView.vue';
import AboutView from '@/pages/AboutView.vue';
import LoginView from '@/pages/LoginView.vue';
import DashboardView from '@/pages/DashboardView.vue';

const routes = [
    {
        path: "/",
        name: "Home",
        component: HomeView
    },
    {
        path: "/about",
        name: "About",
        component: AboutView
    },
    {
        path: "/login",
        name: "Login",
        component: LoginView
    },
    {
        path: "/dashboard",
        name: "Dashboard",
        component: DashboardView,
        meta: {requiresAuth: true}
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

router.beforeEach((to, from, next) => {
    if (to.meta.requiresAuth && !store.state.token) {
        next({name: 'Login'});
    }
    else {
        next();
    }
})

export default router;