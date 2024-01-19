<script setup>

    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
    import { onMounted, reactive } from "vue";
    import { useRoute, RouterLink } from 'vue-router';
    import useExperience from '../../../services/_ExperienceComponent.js';
    import useStructure from '../../../services/_StructureComponent.js'
    import inputElement from '../../../services/_FormElement.js';

    const route = useRoute();
    const id = route.params.id
    const { experience, showExperience } = useExperience();
    const { inputText } = inputElement();
    const { getStructure, structures } = useStructure();

    const models = reactive({
        job: null,
        description: null,
        date_start: null,
        date_end: null,
        structure: null
    })

    onMounted(async() => {
        if (id != null) {
            await showExperience(id);
        }
        await getStructure();
    })

    const upText = (event, alt, contain) => {
        inputText(event, alt, contain);
    }


</script>

<template>
    <div class="mt-16 bg-[#3e3e42] w-1/2 m-auto p-8">
            <RouterLink :to="{ name: 'AfficherExperiences'}" class="text-blue-500"><font-awesome-icon :icon="['fas', 'arrow-left']" /> Retour</RouterLink>
            <div class="title flex-1 text-center m-10 text-2xl font-bold uppercase text-white">
                <h3 v-if="id == null">Ajouter une nouvelle expérience</h3>
                <h3 v-else>Modifier une expérience</h3>
            </div>
        <form class="max-w-md mx-auto">
            <div class="relative mb-3">
                <label v-if="id == null"
                    for="job"
                    class="text-white my-8 relative top-6 left-1 lab-job"
                    >Métier excercé
                </label>
                <label v-else
                    for="job"
                    class="text-white my-8 relative top-6 left-1 lab-job"
                    >{{ experience.job }}
                </label>
                <input
                    type="text"
                    class="border bg-[#3e3e42] w-full rounded-sm focus:border-primary focus:outline-none focus:text-white"
                    id="job"
                    @click="upText($event, 'Métier exercé', experience.job)"
                    v-model="models.job"/>
            </div>

            <div class="relative mb-3">
                <label v-if="id == null"
                    for="description"
                    class="text-white my-8 relative top-6 left-1 lab-description"
                    >Description du poste
                </label>
                <label v-else
                    for="description"
                    class="text-white my-8 relative top-6 left-1 lab-description"
                    >{{ experience.description }}
                </label>
                <textarea
                    class="border bg-[#3e3e42] w-full rounded-sm focus:border-primary focus:outline-none focus:text-white"
                    id="description"
                    rows="3"
                    @click="upText($event, 'Description du poste', experience.description)"
                    v-model="models.description">
                </textarea>
            </div>

            <div class="relative mb-3">
                <label v-if="id == null"
                    for="dateStart"
                    class="text-white my-8 relative top-6 left-1 lab-dateStart"
                    >Date de début</label>
                <label v-else
                    for="dateStart"
                    class="text-white my-8 relative top-6 left-1 lab-dateStart"
                    >{{ experience.date_start }}
                </label>
                <input
                    type="text"
                    class="border bg-[#3e3e42] w-full rounded-sm focus:border-primary focus:outline-none focus:text-white"
                    id="dateStart"
                    @click="upText($event, 'Date de début', experience.date_start)"
                    v-model="models.date_start"/>
            </div>

            <div class="relative mb-3">
                <label v-if="id == null"
                    for="dateEnd"
                    class="text-white my-8 relative top-6 left-1 lab-dateEnd"
                    >Date de fin</label>
                <label v-else
                    for="dateEnd"
                    class="text-white my-8 relative top-6 left-1 lab-dateEnd"
                    >{{ experience.date_end }}
                </label>
                <input
                    type="text"
                    class="border bg-[#3e3e42] w-full rounded-sm focus:border-primary focus:outline-none focus:text-white"
                    id="dateEnd"
                    @click="upText($event, 'Date de fin', experience.date_end)"
                    v-model="models.date_end"/>
            </div>

            <div class="relative mb-3">
                <label
                    for="structure"
                    class="text-white my-8 left-1">Structure
                </label>

                <div class="flex justify-between">
                    <select name="structure" id="structure" 
                        class="border bg-[#3e3e42] w-[60%] p-1 rounded-sm focus:border-primary focus:outline-none text-white"
                        v-if="id == null"
                        v-model="models.structure">
                        <option v-for="structure in structures" :value="structure.id">{{ structure.name }}</option>
                    </select>

                    <select name="structure" id="structure" 
                        class="border bg-[#3e3e42] w-[60%] p-1 rounded-sm focus:border-primary focus:outline-none text-white"
                        v-else
                        v-model="models.structure">
                        <option v-for="structure in experience.structure" :value="structure.id">{{ structure.name }}</option>
                    </select>
                    <button
                    type="button"
                    class="relative flex justify-center items-center w-[35%] text-white bg-[#3e3e42] border border-blue-500 transition-all before:absolute before:left-0 before:top-0 before:h-full before:w-0 before:duration-500 after:absolute after:right-0 after:top-0 after:h-full after:w-0 after:duration-500 hover:text-white hover:border-none hover:before:w-2/4 hover:before:bg-[#007acc] hover:after:w-2/4 hover:after:bg-[#007acc] focus:bg-[#007acc]/50">
                    <span class="relative z-10 w-5/6 h-full flex justify-around items-center text-white">
                        <font-awesome-icon :icon="['fas', 'plus']" /> Créer nouvelle
                    </span>
                    </button>
                </div>
            </div>

            <button
            type="button"
            class="relative flex justify-center items-center my-8 h-[50px] w-1/2 mx-auto text-white bg-[#3e3e42] border border-blue-500 transition-all before:absolute before:left-0 before:top-0 before:h-full before:w-0 before:duration-500 after:absolute after:right-0 after:top-0 after:h-full after:w-0 after:duration-500 hover:text-white hover:border-none hover:before:w-2/4 hover:before:bg-[#007acc] hover:after:w-2/4 hover:after:bg-[#007acc] focus:bg-[#007acc]/50">
            <span class="relative z-10 w-1/2 h-full flex justify-around items-center text-white">
                <font-awesome-icon :icon="['fas', 'floppy-disk']" /> Enregistrer
            </span>
            </button>
        </form>
    </div>
</template>