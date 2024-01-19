<script setup>

    import { Input, initTE } from "tw-elements";
    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
    import useExperience from '../../../services/_ExperienceComponent.js';
    import { RouterLink, useRouter } from "vue-router";
    import { onMounted } from "vue";

    const { getExperience, experiences } = useExperience();
    const router = useRouter();

    onMounted(async() => {
        initTE({ Input });
        await getExperience();
    })

    const showItem = (id) => {
        router.push('/experience/' + id)
    }


    console.log(experiences)

</script>

<template>
    <main class="m-20">
        <div class="mt-6 flex flex-col items-end">
            <RouterLink :to="{ name:'AjouterExperience' }" class="text-white w-60 p-2 py-3 rounded-md bg-[#3e3e42] border-2 border-[#007acc] hover:bg-[#007acc]/90">
                <font-awesome-icon class="mx-2" :icon="['fas', 'plus']" />
                Ajouter une expérience
            </RouterLink>
            
            <table class="table text-gray-400 border-separate space-y-6 text-sm w-full">
                <thead class="bg-[#3e3e42] text-white">
                    <tr>
                        <th class="p-3">Entreprise</th>
                        <th class="p-3 text-left">Métier</th>
                        <th class="p-3 text-left">Description</th>
                        <th class="p-3 text-left">Durée</th>
                        <th class="p-3 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-[#3e3e42] hover:bg-[#58585e] hover:cursor-pointer hover:text-gray-200" 
                        v-for="experience in experiences" :key="experience.id" 
                        @click.prevent="showItem(experience.id)">

                        <td class="p-3" v-for="structure in experience.structure">
                            <div class="flex align-items-center">
                                <img class="rounded-full h-12 w-12 bg-cover" :src="structure.image_adresse" alt="unsplash image">
                                <div class="ml-3">
                                    <div class="">{{ structure.name }}</div>
                                </div>
                           </div>
                        </td>
                        <td class="p-3">
                            {{ experience.job }}
                        </td>
                        <td class="p-3 font-bold">
                            {{ experience.description }}
                        </td>
                        <td class="p-3">
                            <span class="bg-green-400 text-gray-50 rounded-md px-2">{{ experience.date_start }}</span>
                        </td>
                        <td class="p-3 ">
                            <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                <i class="material-icons-outlined text-base">visibility</i>
                        </a>
                            <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                                <i class="material-icons-outlined text-base">edit</i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                                <i class="material-icons-round text-base">delete_outline</i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</template>

<style scoped>
	.table {
		border-spacing: 0 15px;
	}

	i {
		font-size: 1rem !important;
	}

	.table tr {
		border-radius: 20px;
	}

	tr td:nth-child(n+5),
	tr th:nth-child(n+5) {
		border-radius: 0 .625rem .625rem 0;
	}

	tr td:nth-child(1),
	tr th:nth-child(1) {
		border-radius: .625rem 0 0 .625rem;
	}
</style>