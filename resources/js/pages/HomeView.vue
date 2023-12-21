<script setup>

    import useHome from '../services/_HomeComponent.js';
    import CardHome from '../components/HomeComponent/CardHome.vue';

    const { job, getProfil, experience } = useHome();

    getProfil();

</script>

<template>
    <main class="w-screen">
        <h1 class="text-center py-2 mt-6 text-3xl font-bold text-slate-800">{{ job }}</h1>
        <ul class="container m-auto my-4">
            <li class="py-4 px-6 border-b text-gray-700 text-lg">
                <h3>Expériences</h3>
                <CardHome :experience="experience"/>
            </li>
            <li class="py-4 px-6 border-b text-gray-700 text-lg">Formations</li>
        </ul>
    </main>
</template>