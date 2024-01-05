<script setup>

    import { RouterView, RouterLink } from "vue-router";
    import { onMounted } from "vue";
    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

    onMounted(() => {
        document.querySelector('video').playbackRate = 0.75;
        document.querySelector('video').play();
    })

</script>

<template>
    <main class="flex flex-col video-wrapper h-full">
            <video playsinline muted loop>
                <source src="../../../public/assets/images/184814 (Original).mp4" type="video/mp4">
            </video>
            <div class="shadow"></div>
        <div class="flex justify-center">
            <RouterLink :to="{ name: 'AfficherExperiences' }" class="relative flex justify-center items-center h-[100px] w-1/5 bg-[#3e3e42] border-r-2 border-r-[#0f0f0f] transition-all before:absolute before:left-0 before:top-0 before:h-full before:w-0 before:duration-500 after:absolute after:right-0 after:top-0 after:h-full after:w-0 after:duration-500 hover:text-white hover:before:w-2/4 hover:before:bg-[#007acc] hover:after:w-2/4 hover:after:bg-[#007acc] focus:bg-[#007acc]/50">
                <span class="relative z-10 w-full h-full flex flex-col justify-around items-center text-slate-300">
                    <font-awesome-icon class="text-slate-100 text-3xl" :icon="['fas', 'briefcase']" />
                    Expérience
                </span>
            </RouterLink>
            <div class="relative flex justify-center items-center h-[100px] w-1/5 bg-[#3e3e42] border-r-2 border-r-[#0f0f0f] overflow-hidden transition-all duration-200 before:absolute before:bottom-0 before:left-0 before:right-0 before:top-0 before:m-auto before:h-0 before:w-0 before:rounded-sm before:bg-[rgb(0,122,204)] before:duration-300 before:ease-out hover:text-white hover:before:h-40 hover:before:w-[100%] hover:before:opacity-80 focus:bg-[#007acc]/50">
                <span class="relative z-10 w-full h-full flex flex-col justify-around items-center text-slate-300">
                    <font-awesome-icon class="text-white text-3xl" :icon="['fas', 'diagram-project']" />
                    Projets
                </span>
            </div>
            <div class="relative flex justify-center items-center h-[100px] w-1/5 bg-[#3e3e42] border-r-2 border-r-[#0f0f0f] overflow-hidden transition-all before:absolute before:bottom-0 before:left-0 before:top-0 before:z-0 before:h-full before:w-0 before:bg-[#007acc] before:transition-all before:duration-500 hover:text-white hover:before:left-0 hover:before:w-full focus:bg-[#007acc]/50">
                <span class="relative z-10 w-full h-full flex flex-col justify-around items-center text-slate-300">
                    <font-awesome-icon class="text-white text-3xl" :icon="['fas', 'clipboard-user']" />
                    Compétences
                </span>
            </div>
            <div class="relative flex justify-center items-center h-[100px] w-1/5 bg-[#3e3e42] border-r-2 border-r-[#0f0f0f] overflow-hidden transition-all before:absolute before:left-0 before:right-0 before:top-0 before:h-0 before:w-full before:bg-[#007acc] before:duration-500 after:absolute after:bottom-0 after:left-0 after:right-0 after:h-0 after:w-full after:bg-[#007acc] after:duration-500 hover:text-white hover:shadow-[#007acc] hover:before:h-2/4 hover:after:h-2/4 focus:bg-[#007acc]/50">
                <span class="relative z-10 w-full h-full flex flex-col justify-around items-center text-slate-300">
                    <font-awesome-icon class="text-white text-3xl" :icon="['fas', 'gears']" />
                    Paramètres
                </span>
            </div>
        </div>
        <RouterView/>
    </main>
</template>

<style>

    video {
        position: fixed;
        top: 0;
        left: 13%;
        filter: brightness(0.5);
        z-index: -3;
    }

    .shadow {
        position: absolute;
        width: 109.3%;
        height: 100%;
        top: 0;
        left: -3%;
        z-index: -1;
        box-shadow: 0px 0px 50px 50px #0f0f0f inset;
    }
    
</style>