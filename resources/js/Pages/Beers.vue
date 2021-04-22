<template>
    <section class="p-4 lg:mt-10 mt-4">
        <div class="flex justify-between">
            <h1 class="text-2xl font-bold text-gray-700 mb-6">{{ brewery.name }}</h1>

            <inertia-link :href="route('breweries.index')" class="flex justify-center items-center justify-center bg-indigo-500 hover:bg-indigo-600 mb-4 rounded-md block text-sm px-4 focus:outline-none">
                <i class='bx bxs-arrow-to-left text-white mr-1 text-2xl'></i>
                <span class="font-semibold text-white">Voltar</span>
            </inertia-link>
        </div>

        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ABV
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Qtd. mL
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Descrição
                                </th>
                            </tr>
                            </thead>
                            <tbody v-if="beers.length > 0" class="bg-white divide-y divide-gray-200">
                                <tr v-for="b in beers" :key="b.id">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ b.name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        5.5
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        500mL
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 truncate">
                                        {{ b.description }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
    <!--                    <div class="px-6 pb-4 bg-white">
                            <pagination :data="beers" />
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Pagination from "../Shared/Pagination.vue";
export default {
    components: { Pagination },
    name: "Beers",
    props: {
        brewery: Object,
        beers: Array,
    },
};
</script>
