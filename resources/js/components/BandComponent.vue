<script setup>

    import { RouterLink, useRoute } from 'vue-router';
    import store from '../store';
    import router from '../router';
    import { useStore } from 'vuex';
    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
    import { faTwitter, faGithub, faFacebook, faLinkedin } from '@fortawesome/free-brands-svg-icons';
    import { library } from '@fortawesome/fontawesome-svg-core';
    import { Collapse, Dropdown, initTE } from "tw-elements";
    import { onMounted } from 'vue';

    const stores = useStore();
    const route = useRoute();
    library.add([faTwitter, faGithub, faFacebook, faLinkedin])

    const logout = () => {
        stores.dispatch('defineTokenToNull');
        router.push({name: 'Home'});
    }

    onMounted(() => {
        initTE({ Collapse, Dropdown });
    })

    console.log(route.name)

</script>

<template>

    <header class="w-[13%] h-screen flex flex-col justify-between fixed bottom-0 left-0">
        <div class="bg-[#1e1e1e] profil w-11/12 mx-auto my-4 py-2 flex flex-col align-middle justify-around text-center" :class="{ maximize: store.state.token }">
            <div class="w-full flex justify-center my-2">
                <div class="h-[75px] w-[75px] rounded-full bg-slate-50"></div>
            </div>
            <h5 class="text-slate-50 font-semibold text-md">Grégory WOLFF</h5>
            <div class="flex flex-col">
                <span class="text-slate-400 text-sm">Développeur Full-Stack</span>
                <span class="text-slate-400 text-sm">Web & Web mobile</span>
            </div>
            <RouterLink :to="{ name: 'Login' }" class="text-[#007acc]" v-if="!store.state.token">Connexion</RouterLink>
            <span v-else @click="logout" class="text-[#007acc] cursor-pointer">Déconnexion</span>

            <div class="flex translate-y-3" v-if="store.state.token">
                <RouterLink :to="{ name: 'AfficherExperiences' }" class="w-1/4 h-full py-4 flex justify-center items-center bg-[#1e1e1e] border-b-2 border-b-[#1e1e1e] border-t-2 border-t-[#0f0f0f] border-r-2 border-r-[#0f0f0f] hover:scale-110 hover:border-none">
                    <font-awesome-icon class="text-white text-lg" :icon="['fas', 'briefcase']" />
                </RouterLink>
                <div class="w-1/4 h-full py-4 flex justify-center items-center bg-[#1e1e1e] border-b-2 border-b-[#1e1e1e] border-t-2 border-t-[#0f0f0f] border-r-2 border-r-[#0f0f0f] hover:scale-110 hover:border-none">
                    <font-awesome-icon class="text-white text-lg" :icon="['fas', 'diagram-project']" />
                </div>
                <div class="w-1/4 h-full py-4 flex justify-center items-center bg-[#1e1e1e] border-b-2 border-b-[#1e1e1e] border-t-2 border-t-[#0f0f0f] border-r-2 border-r-[#0f0f0f] hover:scale-110 hover:border-none">
                    <font-awesome-icon class="text-white text-lg" :icon="['fas', 'clipboard-user']" />
                </div>
                <div class="w-1/4 h-full py-4 flex justify-center items-center bg-[#1e1e1e] border-b-2 border-b-[#1e1e1e] border-t-2 border-t-[#0f0f0f] hover:scale-110 hover:border-none">
                    <font-awesome-icon class="text-white text-lg" :icon="['fas', 'gears']" />
                </div>
            </div>
        </div>

        <nav class="my-2">
            <ul class="flex flex-col">
                <RouterLink :to="{ name: 'Home' }" 
                    class="text-[#007acc] bg-[#1e1e1e] w-11/12 mx-auto py-4 my-1 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-[#3e3e42] hover:scale-105 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-[#007acca6] focus:text-[#252526] focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-yellow-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 text-xs font-medium leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
                    <font-awesome-icon class="text-base mr-6" :icon="['fas', 'house']" />
                    <span class="text-sm">Acceuil</span>
                </RouterLink>

                <RouterLink :to="{ name: 'Dashboard' }"
                    v-if="store.state.token"
                    class="text-[#007acc] bg-[#1e1e1e] w-11/12 mx-auto py-4 my-1 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-[#3e3e42] hover:scale-105 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-[#007acca6] focus:text-[#252526] focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-yellow-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 text-xs font-medium leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
                    <font-awesome-icon class="text-base mr-6" :icon="['fas', 'chalkboard-user']" />
                    <span class="text-sm">Tableau de bord</span>
                </RouterLink>

                <li class="text-[#007acc] bg-[#1e1e1e] w-11/12 mx-auto py-4 my-1 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-[#3e3e42] hover:scale-105 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-[#007acca6] focus:text-[#252526] focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-yellow-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 text-xs font-medium leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
                    <font-awesome-icon class="text-base mr-6" :icon="['fas', 'comments']" />
                    <a href="#" class="text-sm">Contact</a>
                </li>

                <li class="text-[#007acc] bg-[#1e1e1e] w-11/12 mx-auto py-4 my-1 shadow-[0_4px_9px_-4px_rgba(51,45,45,0.7)] hover:bg-[#3e3e42] hover:scale-105 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] focus:bg-[#007acca6] focus:text-[#252526] focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] active:bg-yellow-700 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.2),0_4px_18px_0_rgba(51,45,45,0.1)] px-6 pb-2 pt-2.5 text-xs font-medium leading-normal transition duration-150 ease-in-out focus:outline-none focus:ring-0">
                    <font-awesome-icon class="text-base mr-6" :icon="['fas', 'file-arrow-down']" />
                    <a href="#" class="text-sm">Télécharger</a>
                </li>
            </ul>
        </nav>

        <!--Separate-->
        <div class="border w-11/12 mx-auto border-[#1e1e1e]"></div>

        <!--Separate-->
        <div class="border w-11/12 mx-auto border-[#1e1e1e]"></div>

        <div class="w-11/12 mx-auto flex justify-between text-slate-50">
            <h5 class="text-slate-50 font-semibold text-sm mx-4">Pays :</h5>
            <p class="text-slate-400 text-xs mx-4">France</p>
        </div>
        <div class="w-11/12 mx-auto flex justify-between text-slate-50">
            <h5 class="text-slate-50 font-semibold text-sm mx-4">Ville :</h5>
            <p class="text-slate-400 text-xs mx-4">Vatimont</p>
        </div>
        <div class="w-11/12 mx-auto flex justify-between text-slate-50">
            <h5 class="text-slate-50 font-semibold text-sm mx-4">Age :</h5>
            <p class="text-slate-400 text-xs mx-4">36</p>
        </div>

        <div class="flex w-11/12 mx-auto my-4">
                <div class="w-1/4 h-full py-4 flex justify-center items-center bg-[#1e1e1e] border-l-2 border-l-[#0f0f0f] border-r-2 border-r-[#0f0f0f] hover:scale-110 hover:border-none">
                    <font-awesome-icon class="text-white text-lg" :icon="['fab', 'github']"/>
                </div>
                <div class="w-1/4 h-full py-4 flex justify-center items-center bg-[#1e1e1e] border-r-2 border-r-[#0f0f0f] hover:scale-110 hover:border-none">
                    <font-awesome-icon class="text-white text-lg" :icon="['fab', 'twitter']" />
                </div>
                <div class="w-1/4 h-full py-4 flex justify-center items-center bg-[#1e1e1e] border-r-2 border-r-[#0f0f0f] hover:scale-110 hover:border-none">
                    <font-awesome-icon class="text-white text-lg" :icon="['fab', 'facebook']" />
                </div>
                <div class="w-1/4 h-full py-4 flex justify-center items-center bg-[#1e1e1e] border-r-2 border-r-[#0f0f0f] hover:scale-110 hover:border-none">
                    <font-awesome-icon class="text-white text-lg" :icon="['fab', 'linkedin']" />
                </div>
        </div>

    </header>

</template>

<style scoped>

    .profil {
        height: calc(100vh/4);
        transition: all 0.5s ease;
    }

    .maximize {
        height: calc(100vh/3.5);
        transition: all 0.5s ease;
    }

</style>