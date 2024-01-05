<script setup>

    import { RouterView, useRoute, RouterLink } from 'vue-router';
    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

    const route = useRoute();

</script>

<template>
    <div class="text-blue-400 w-3/4 m-auto my-2" v-if="route.name == 'AjouterExperience'">
        <RouterLink :to="{ name: 'AfficherExperiences' }">
            <font-awesome-icon class="mx-2" :icon="['fas', 'arrow-left']" />
            Retour
        </RouterLink>
    </div>
    <RouterView/>
</template>