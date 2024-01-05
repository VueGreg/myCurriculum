<script setup>

    import { Input, initTE } from "tw-elements";
    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
    import useExperience from '../../../services/_ExperienceComponent.js';
    import { RouterLink } from "vue-router";
    import { onMounted } from "vue";

    const { getExperience, experience } = useExperience();

    getExperience();

    onMounted(() => {
        initTE({ Input });
    })

</script>

<template>
    <main class="m-20">
        <div class="mt-6 flex flex-col items-end">
            <RouterLink :to="{ name:'AjouterExperience' }" class="text-white w-60 p-2 py-3 rounded-md bg-[#3e3e42] border-2 border-[#007acc] hover:bg-[#007acc]/90">
                <font-awesome-icon class="mx-2" :icon="['fas', 'plus']" />
                Ajouter une expérience
            </RouterLink>
            
            <table class="table text-gray-400 border-separate space-y-6 text-sm w-full">
                <thead class="bg-[#3e3e42] text-[#007acc]">
                    <tr>
                        <th class="p-3">Brand</th>
                        <th class="p-3 text-left">Category</th>
                        <th class="p-3 text-left">Price</th>
                        <th class="p-3 text-left">Status</th>
                        <th class="p-3 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-[#3e3e42]">
                        <td class="p-3">
                            <div class="flex align-items-center">
                                <img class="rounded-full h-12 w-12  object-cover" src="https://images.unsplash.com/photo-1613588718956-c2e80305bf61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80" alt="unsplash image">
                                <div class="ml-3">
                                    <div class="">Appple</div>
                                 <div class="text-gray-500">mail@rgmail.com</div>
                                </div>
                           </div>
                           </td>
                           <td class="p-3">
                               Technology
                           </td>
                        <td class="p-3 font-bold">
                            200.00$
                        </td>
                        <td class="p-3">
                            <span class="bg-green-400 text-gray-50 rounded-md px-2">available</span>
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
                    <tr class="bg-[#3e3e42]">
                        <td class="p-3">
                            <div class="flex align-items-center">
                                <img class="rounded-full h-12 w-12   object-cover" src="https://images.unsplash.com/photo-1423784346385-c1d4dac9893a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="unsplash image">
                                <div class="ml-3">
                                    <div class="">Realme</div>
                                    <div class="text-gray-500">mail@rgmail.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="p-3">
                            Technology
                        </td>
                        <td class="p-3 font-bold">
                            200.00$
                        </td>
                        <td class="p-3">
                            <span class="bg-red-400 text-gray-50 rounded-md px-2">no stock</span>
                        </td>
                        <td class="p-3">
                            <a href="#" class="text-gray-400 hover:text-gray-100  mr-2">
                                <i class="material-icons-outlined text-base">visibility</i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-gray-100 mx-2">
                                <i class="material-icons-outlined text-base">edit</i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-gray-100 ml-2">
                                <i class="material-icons-round text-base">delete_outline</i>
                            </a>
                        </td>
                    </tr>
                    <tr class="bg-[#3e3e42]">
                        <td class="p-3">
                            <div class="flex align-items-center">
                                <img class="rounded-full h-12 w-12   object-cover" src="https://images.unsplash.com/photo-1600856209923-34372e319a5d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2135&q=80" alt="unsplash image">
                                <div class="ml-3">
                                    <div class="">Samsung</div>
                                    <div class="text-gray-500">mail@rgmail.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="p-3">
                            Technology
                        </td>
                        <td class="p-3 font-bold">
                            200.00$
                        </td>
                        <td class="p-3">
                            <span class="bg-yellow-400 text-gray-50  rounded-md px-2">start sale</span>
                        </td>
                        <td class="p-3">
                            <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                <i class="material-icons-outlined text-base">visibility</i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-gray-100 mx-2">
                                <i class="material-icons-outlined text-base">edit</i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-gray-100 ml-2">
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