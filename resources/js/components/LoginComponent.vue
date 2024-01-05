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
    <div class="flex justify-center items-center h-ful px-6">
        <div class="p-6 max-w-sm w-full bg-[#252526] shadow-md rounded-md">
            <div class="flex justify-center items-center">
                <span class="text-[#007acc] font-semibold text-2xl py-10">Accès au tableau de bord</span>
            </div>

            <form class="mt-4" @submit.prevent="register()">
                <label class="block">
                    <span class="text-slate-100 text-sm">Email</span>
                    <input type="email" class="form-input mt-1 block w-full rounded-md border border-[#007acc] focus:border-[#007acc] py-1 bg-[#3e3e42] text-slate-100" v-model="login.email">
                </label>

                <label class="block mt-3">
                    <span class="text-slate-100 text-sm">Password</span>
                    <input type="password" class="form-input mt-1 block w-full rounded-md border border-[#007acc] focus:border-[#007acc] py-1 bg-[#3e3e42] text-slate-100" v-model="login.password">
                </label>

                <div class="mt-6">
                    <button class="py-2 px-4 my-4 text-center bg-[#3e3e42] rounded-md w-full text-white text-sm hover:bg-[#007acc]" type="submit">
                        Se connecter
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>