<script setup>

    import { RouterView, RouterLink } from "vue-router";

</script>

<template>
    <h1 class="text-center font-bold text-3xl text-gray-800 m-8">Tableau de bord</h1>

    <div class="flex justify-around w-100 m-auto mt-4 mb-4">
        <RouterLink class="rounded-md bg-white m-2 py-4 px-4 whitespace-no-wrap" :to="{name: 'Experiences'}">
            <div class="inline-flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden ml-3 h-20">
            <div class="flex justify-center items-center w-12 bg-green-500"></div>
                <div class="-mx-3 py-2 px-4 flex items-center">
                    <div class="mx-3">
                        <span class="text-green-500 font-semibold">Experiences</span>
                        <p class="text-gray-600 text-sm">Your account was registered!</p>
                    </div>
                </div>
            </div>
        </RouterLink>

        <RouterLink class="rounded-md bg-white m-2 py-4 px-4 whitespace-no-wrap" :to="{name: 'Experiences'}">
            <div class="inline-flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden ml-3 h-20">
            <div class="flex justify-center items-center w-12 bg-blue-500"></div>
                <div class="-mx-3 py-2 px-4 flex items-center">
                    <div class="mx-3">
                        <span class="text-blue-500 font-semibold">Projets</span>
                        <p class="text-gray-600 text-sm">Your account was registered!</p>
                    </div>
                </div>
            </div>
        </RouterLink>

        <RouterLink class="rounded-md bg-white m-2 py-4 px-4 whitespace-no-wrap" :to="{name: 'Experiences'}">
            <div class="inline-flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden ml-3 h-20">
            <div class="flex justify-center items-center w-12 bg-yellow-500"></div>
                <div class="-mx-3 py-2 px-4 flex items-center">
                    <div class="mx-3">
                        <span class="text-yellow-500 font-semibold">Compétences</span>
                        <p class="text-gray-600 text-sm">Your account was registered!</p>
                    </div>
                </div>
            </div>
        </RouterLink>

        <RouterLink class="rounded-md bg-white m-2 py-4 px-4 whitespace-no-wrap" :to="{name: 'Experiences'}">
            <div class="inline-flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden ml-3 h-20">
            <div class="flex justify-center items-center w-12 bg-gray-500"></div>
                <div class="-mx-3 py-2 px-4 flex items-center">
                    <div class="mx-3">
                        <span class="text-gray-500 font-semibold">Paramètres</span>
                        <p class="text-gray-600 text-sm">Your account was registered!</p>
                    </div>
                </div>
            </div>
        </RouterLink>
    </div>

    <RouterView/>
</template>