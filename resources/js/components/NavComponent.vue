<script setup>

    import { RouterLink } from 'vue-router';
    import store from '../store';
    import router from '../router';
    import { useStore } from 'vuex';

    const stores = useStore();

    const logout = () => {
        stores.dispatch('defineTokenToNull');
        router.push({name: 'Home'});
    }

</script>

<template>
    <nav class="flex justify-between px-20 py-10 items-center bg-slate-800">
    <h1 class="text-xl text-gray-300 font-bold">WOLFF Grégory</h1>
    <ul class="flex items-center space-x-6">
        <li class="font-semibold text-gray-300 relative link-effect py-1"><RouterLink :to="{ name: 'Home' }">Home</RouterLink></li>
        <li class="font-semibold text-gray-300 relative link-effect py-1"><RouterLink :to="{ name: 'About' }">About</RouterLink></li>
        <li class="font-semibold text-gray-300 relative link-effect py-1" v-if="!store.state.token"><RouterLink :to="{ name: 'Login' }">Login</RouterLink></li>
        <li class="font-semibold text-gray-300 relative link-effect py-1" v-else @click="logout">Logout</li>
        <li class="font-semibold text-gray-300 relative link-effect py-1"><RouterLink :to="{ name: 'Dashboard' }">Dashboard</RouterLink></li>
    </ul>
        <div class="flex items-center">
            <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 pt-0.5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <input class="ml-2 outline-none bg-transparent font-" type="text" name="search" id="search" placeholder="Rechercher..." />
            </div>  
        </div>
    </nav>
</template>

<style scoped>

    .link-effect::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 0.1em;
        background-color: #B0BA93;
        opacity: 0;
        transition: opacity 300ms, transform 300ms;
    }

    .link-effect:hover::after,
    .link-effect:focus::after {
        opacity: 1;
        transform: translate3d(0, 0.2em, 0);
    }

</style>