<template>
    <form class="mb-4 w-full md:w-1/3">
        <!--<label for="search" class="block text-sm font-medium text-gray-700">Search Breweries</label>-->
        <!--        <div class="mt-1 flex rounded-md shadow-sm">
            <div class="relative flex items-stretch flex-grow focus-within:z-10">
                <div
                    class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg
                        class="h-5 w-5 text-gray-400"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"/>
                    </svg>
                </div>
                <input

                    type="search"
                    name="search"
                    id="search"
                    class="focus:ring-indigo-500 focus:border-indigo-500 block w-full rounded-none rounded-l-md pl-10 sm:text-sm border-gray-300"
                    placeholder="John Doe"/>
            </div>
&lt;!&ndash;            <button
                type="submit"
                class="-ml-px relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500"
            >
                <span>Search</span>
            </button>&ndash;&gt;
        </div>-->
    </form>


    <!--Button Create-->
    <div class="">
        <button @click.prevent="modalCreateBreweries" class="flex justify-between items-center justify-center bg-indigo-500 hover:bg-indigo-600 mb-2 rounded-md block text-sm px-4 py-2 focus:outline-none">
            <i class="fas fa-plus text-white mr-2"></i>
            <span class="font-semibold text-white">Adicionar</span>
        </button>
    </div>

    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <ul class="divide-y divide-gray-200">
            <li v-for="b in breweries.data" :key="b.id">
                <inertia-link :href="route('beers.index', {id: b.id})" class="hover:bg-gray-50">
                    <div class="px-4 py-5 sm:px-6">

                        <div class="flex items-center justify-between">
                            <p class="text-sm font-medium text-indigo-600 truncate">{{ b.name }}</p>

                            <div class="flex justify-between">
                                <div class="ml-2 flex-shrink-0 flex">
                                    <p class="px-2 items-center justify-center flex text-center text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Open NOW! 🍺  </p>
                                </div>
<!--                                <div class="ml-2 flex-shrink-0 flex">-->
<!--                                    <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-300 text-red-100">Close NOW! ❌  </p>-->
<!--                                </div>-->

                                <!--Ellipses-->
                                <div class="hidden lg:flex justify-end relative ml-4">
                                    <button  @click.prevent="dropActive(b.id)" class="flex items-center justify-center focus:outline-none bg-gray-50 p-2 hover:bg-gray-200 h-6 w-6 rounded-full">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <!--                                    <div v-show="drop === b.id" class="z-30 absolute bg-gray-100 border-2 rounded-sm border-gray-200 transition mt-6  shadow-2xl">
                                        <div class="dropdown-content w-24">
                                            <div class="flex flex-wrap items-center justify-center">
                                                <a class="w-full flex items-center justify-end p-2 text-sm space-x-2 dropdown-item hover:bg-gray-200" href="/">
                                                    <span class="font-semibold text-gray-700">Editar</span>
                                                    <i class="fas fa-trash text-gray-700"></i>
                                                </a>
                                                <a class="w-full flex items-center justify-end p-2 text-sm space-x-2 dropdown-item hover:bg-gray-200 divide-y border-t border-gray-200" href="/">
                                                    <span class="font-semibold text-gray-700">Excluir</span>
                                                    <i class="fas fa-pencil-alt text-gray-700"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>-->
                                    <div v-show="drop === b.id" class="absolute right-0 mr-6 w-32 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                        <div class=" flex flex-col">
                                            <a @click.prevent="edit(b.id)" class="text-gray-700 block px-4 py-2 text-sm border-t border-gray-100 flex justify-between hover:bg-gray-200">
                                                <span class="font-semibold text-gray-700">Editar</span>
                                                <i class="fas fa-pencil-alt text-gray-700"></i>
                                            </a>
                                            <a @click.prevent="deleteBrewery(b.id)" class="text-gray-700 block px-4 py-2 text-sm border-t border-gray-100 flex justify-between hover:bg-gray-200">
                                                <span class="font-semibold text-gray-700">Excluir</span>
                                                <i class="fas fa-trash text-gray-700"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="mt-2 sm:flex sm:justify-between">
                            <!--Location-->
                            <div class="sm:flex">
                                <p class="mt-2 flex items-center text-sm text-gray-500">
                                    <svg
                                        class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true">
                                        <path
                                            fill-rule="evenodd"
                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    {{ b.address.city }} - {{ b.address.country }}
                                </p>
                            </div>

                            <!--<div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                <p>Qtd. de Cervejas: {{ b.beers_count }}</p>
                            </div>-->
                        </div>

                    </div>
                </inertia-link>
            </li>
        </ul>

        <div class="px-6 pb-6">
            <Pagination :data="breweries"/>
        </div>
    </div>

    <!--Modal Create Brewery-->
    <!--<div v-show="modal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">

                    &lt;!&ndash;HEADER MODAL&ndash;&gt;
                    <div class="sm:flex sm:items-center justify-between">
                        <div class="flex items-center justify-center">
                            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-500 sm:mx-0 sm:h-10 sm:w-10">
                                <i class="bx bx-plus text-white text-2xl"></i>
                            </div>
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Adicione uma Cervejaria</h3>
                            </div>
                        </div>

                        <div @click.prevent="modalActive" class="cursor-pointer rounded-full flex p-1">
                            <i class="bx bx-x text-2xl text-gray-700 hover:text-gray-900"></i>
                        </div>
                    </div>

                    &lt;!&ndash;BODY MODAL&ndash;&gt;
                    <form action="">
                    <div class="">
                        <div class="flex flex-col lg:flex-row lg:flex-wrap w-full mt-6 mb-4">
                            <div class="w-full lg:w-1/2">
                                <div class=" flex flex-col mb-4 text-gray-500 lg:mr-4 mt-0">
                                    <div class="mb-2">Nome</div>
                                    <input v-model="form.name" placeholder="Digite um Nome" name="name" type="text" class="block text-sm leading-none w-full appearance-none bg-white border px-2 py-3 rounded border-gray-500 focus:outline-none">
                                    <div v-if="errors.name" class="text-red-600">{{ errors.name.toString() }}</div>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/2">
                                <div class=" flex flex-col mb-4 text-gray-500 lg:mr-4 mt-0">
                                    <div class="mb-2">País</div>
                                    <input v-model="form.address.country" placeholder="Digite um País" name="country" type="text" class="block text-sm leading-none w-full appearance-none bg-white border px-2 py-3 rounded border-gray-500 focus:outline-none">
                                    <div v-if="form.errors['address.country']" class="text-red-600">{{ form.errors['address.country'].toString() }}</div>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/2">
                                <div class=" flex flex-col mb-4 text-gray-500 lg:mr-4 mt-0">
                                    <div class="mb-2">Cidade</div>
                                    <input v-model="form.address.city" placeholder="Digite uma Cidade" name="city" type="text" class="block text-sm leading-none w-full appearance-none bg-white border px-2 py-3 rounded border-gray-500 focus:outline-none">
&lt;!&ndash;                                    <div v-if="form.errors.address" class="text-red-600">{{ form.errors.address.toString() }}</div>&ndash;&gt;
                                </div>
                            </div>
                            <div class="w-full lg:w-1/2">
                                <div class=" flex flex-col mb-4 text-gray-500 lg:mr-4 mt-0">
                                    <div class="mb-2">Número</div>
                                    <input v-model="form.address.number" placeholder="Digite um Número" name="number" type="text" class="block text-sm leading-none w-full appearance-none bg-white border px-2 py-3 rounded border-gray-500 focus:outline-none">
&lt;!&ndash;                                    <div v-if="errors.address.number" class="text-red-600">{{ errors.address.number.toString() }}</div>&ndash;&gt;
                                </div>
                            </div>
                            <div class="w-full lg:w-1/2">
                                <div class=" flex flex-col mb-4 text-gray-500 lg:mr-4 mt-0">
                                    <div class="mb-2">Telefone</div>
                                    <input v-model="form.phone" placeholder="Digite um Telefone" name="phone" type="text" class="block text-sm leading-none w-full appearance-none bg-white border px-2 py-3 rounded border-gray-500 focus:outline-none">
                                    <div v-if="form.errors.phone" class="text-red-600">{{ form.errors.phone.toString() }}</div>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/2">
                                <div class=" flex flex-col mb-4 text-gray-500 lg:mr-4 mt-0">
                                    <div class="mb-2">Web site</div>
                                    <input v-model="form.website" placeholder="Digite um Telefone" name="website" type="text" class="block text-sm leading-none w-full appearance-none bg-white border px-2 py-3 rounded border-gray-500 focus:outline-none">
&lt;!&ndash;                                    <div v-if="errors.website">{{ errors.website }}</div>&ndash;&gt;
                                </div>
                            </div>
                            <div class="w-full lg:w-2/2">
                                <div class=" flex flex-col mb-4 text-gray-500 lg:mr-4 mt-0">
                                    <div class="mb-2">Descrição</div>
                                    <textarea v-model="form.descript" placeholder="Descrição da Cervejaria" name="descript" rows="5" class="block text-sm leading-none w-full appearance-none bg-white border px-2 py-3 rounded border-gray-500 focus:outline-none"/>
&lt;!&ndash;                                    <div v-if="errors.descript">{{ errors.descript }}</div>&ndash;&gt;
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                &lt;!&ndash;FOOTER MODAL&ndash;&gt;
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button @click.prevent="form.post('/breweries')" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Adicionar
                    </button>
                    <button @click.prevent="modalActive" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>-->

    <ModalCreateBreweries/>
</template>

<script>
import Pagination from "../Shared/Pagination";
import {useForm} from "@inertiajs/inertia-vue3";
import ModalCreateBreweries from "../components/Modal/ModalCreateBreweries";
import emitter from "../services/eventHub"
export default {
    name: "Dashboard",
    components: {ModalCreateBreweries, Pagination},
    props: {
        /*Props que vem do BeerController*/
        breweries: Object,
        errors: Object,
    },
    data() {
        return {
            drop: false,
            data: {}
        };
    },
    /*setup() {
        const form = useForm({
            name: null,
            address: {
                country: null,
                city: null,
                number: null
            },
            phone: null,
            website: null,
            descript: null
        })
        return {form}
    },*/
    methods: {
        dropActive(payload) {
            // console.log(payload)
            this.drop = this.drop === payload ? null : payload
            /*if(this.drop === payload) {
                this.drop = null;
            } else {
                this.drop = payload;
            }*/
        },
        edit(payload) {
            this.$inertia.get(`breweries/${payload}/edit`)
        },
        /*Delete*/
        deleteBrewery(payload) {
            this.data._method = 'DELETE'
            this.$inertia.post(`/breweries/${payload}`, this.data, {
                onSuccess: response => {
                    console.log(response)
                },
                onError: error => {
                    console.log(error)
                }
            })
        },
        /*modalActive() {
            this.modal = !this.modal
        },*/
        modalCreateBreweries() {
            emitter.$emit('modalActive')
            console.log('Emissão enviado!')
        },
    }
};
</script>
