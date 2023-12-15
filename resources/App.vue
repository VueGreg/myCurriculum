<script setup>

    import { RouterView, RouterLink } from 'vue-router';
    import store from './js/store';
    import router from './js/router';
    import { useStore } from 'vuex';

    const stores = useStore();

    const logout = () => {
        stores.dispatch('defineTokenToNull');
        router.push({name: 'Home'});
    }

</script>

<template>
    <div>
        <h1>Mon site</h1>
        <nav>
            <RouterLink :to="{ name: 'Home' }">Home</RouterLink>
            <RouterLink :to="{ name: 'About' }">About</RouterLink>
            <RouterLink :to="{ name: 'Login' }" v-if="!store.state.token">Login</RouterLink>
            <button v-else @click="logout">Logout</button>
            <RouterLink :to="{ name: 'Dashboard' }">Dashboard</RouterLink>
        </nav>
        <RouterView/>
    </div>
</template>