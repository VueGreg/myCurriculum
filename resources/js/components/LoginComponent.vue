<script setup>

    import { reactive } from 'vue';
    import useLogin from '../services/_LoginComponent.js'

    const { errors, getToken } = useLogin();
 
    const login = reactive({
        email: null,
        password: null
    })

    const register = async() => {
        await getToken(login.email, login.password)
    }

</script>


<template>
    <h2>Login</h2>
    <div>
        <input type="email" name="email" v-model="login.email">
        <input type="password" name="password" v-model="login.password">
        <button type="submit" @click.prevent="register()">Se connecter</button>
    </div>

</template>