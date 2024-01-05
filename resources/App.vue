<script setup>

    import { RouterView} from 'vue-router';
    import BandComponent from './js/components/BandComponent.vue';

</script>

<template>
    <div class="flex">
        <BandComponent/>
        <RouterView class="w-[80%] mx-auto py-6 px-0 m-0 absolute end-[5%]"/>
    </div>
</template>
