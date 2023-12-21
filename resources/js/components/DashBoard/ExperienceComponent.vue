<script setup>

    import { Input, initTE } from "tw-elements";

    initTE({ Input });

</script>

<template>
    <main class="m-8 bg-gray-200">
        <div class="mt-6">
            <div class="bg-white shadow rounded-md overflow-hidden my-6">
                <table class="text-left w-full border-collapse">
                    <thead class="border-b">
                        <tr>
                            <th class="py-3 px-5 bg-slate-700 font-medium uppercase text-sm text-gray-100">Métier exercé</th>
                            <th class="py-3 px-5 bg-slate-700 font-medium uppercase text-sm text-gray-100">Description</th>
                            <th class="py-3 px-5 bg-slate-700 font-medium uppercase text-sm text-gray-100">Structure</th>
                            <th class="py-3 px-5 bg-slate-700 font-medium uppercase text-sm text-gray-100">Voir les projets</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b text-gray-700 text-lg">New York</td>
                            <td class="py-4 px-6 border-b text-gray-500">200,120</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</template>