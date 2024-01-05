import { createWebHistory, createRouter } from "vue-router";
import store from '../store';

import HomeView from '@/pages/HomeView.vue';
import AboutView from '@/pages/AboutView.vue';
import LoginView from '@/pages/LoginView.vue';
import DashboardView from '@/pages/DashboardView.vue';
import ExperienceView from '@/components/DashBoard/ExperienceView.vue';
import TableExperienceComponent from '@/components/DashBoard/Experience/TableExperienceComponent.vue';
import AddExperienceComponent from '@/components/DashBoard//Experience/AddExperienceComponent.vue';

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
        redirect: { path: "/experiences" },
        name: "Dashboard",
        component: DashboardView,
        children: [
            {
                path:"/experiences",
                redirect: { path: "/experiences/index" },
                name:"Experiences",
                component: ExperienceView,
                children: [
                    {
                        path:"/experiences/ajouter",
                        name:"AjouterExperience",
                        component: AddExperienceComponent
                    },
                    {
                        path:"/experiences/index",
                        name:"AfficherExperiences",
                        component: TableExperienceComponent
                    }
                ]
            }
        ],
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