<template>
    <!--Modal Create Brewery-->
    <div v-show="modal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">

                    <!--HEADER MODAL-->
                    <div class="sm:flex sm:items-center justify-between">
                        <div class="flex items-center justify-center">
                            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-500 sm:mx-0 sm:h-10 sm:w-10">
                                <i class="bx bx-plus text-white text-2xl"></i>
                            </div>
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Adicione uma Cervejaria</h3>
                            </div>
                        </div>

                        <div @click.prevent="modalClose" class="cursor-pointer rounded-full flex p-1">
                            <i class="bx bx-x text-2xl text-gray-700 hover:text-gray-900"></i>
                        </div>
                    </div>

                    <!--BODY MODAL-->
                    <form action="">
                        <div class="">
                            <div class="flex flex-col lg:flex-row lg:flex-wrap w-full mt-6 mb-4">
                                <div class="w-full lg:w-1/2">
                                    <div class=" flex flex-col mb-4 text-gray-500 lg:mr-4 mt-0">
                                        <div class="mb-2">Nome</div>
                                        <input v-model="formBreweries.name"
                                               :class="formBreweries.errors.name ? 'border-red-600' : ''"
                                               placeholder="Digite um Nome" name="name" type="text"
                                               class="block text-sm leading-none w-full appearance-none bg-white border px-2 py-3 rounded border-gray-500 focus:outline-none">
                                        <div v-if="formBreweries.errors.name" class="text-red-600">{{ formBreweries.errors.name.toString() }}</div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-1/2">
                                    <div class=" flex flex-col mb-4 text-gray-500 lg:mr-4 mt-0">
                                        <div class="mb-2">País</div>
                                        <input v-model="formBreweries.address.country"
                                               :class="formBreweries.errors['address.country'] ? 'border-red-600' : ''"
                                               placeholder="Digite um País" name="country" type="text"
                                               class="block text-sm leading-none w-full appearance-none bg-white border px-2 py-3 rounded border-gray-500 focus:outline-none">
                                        <div v-if="formBreweries.errors['address.country']" class="text-red-600">{{ formBreweries.errors['address.country'].toString() }}</div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-1/2">
                                    <div class=" flex flex-col mb-4 text-gray-500 lg:mr-4 mt-0">
                                        <div class="mb-2">Cidade</div>
                                        <input v-model="formBreweries.address.city"
                                               :class="formBreweries.errors['address.city'] ? 'border-red-600' : ''"
                                               placeholder="Digite uma Cidade" name="city" type="text"
                                               class="block text-sm leading-none w-full appearance-none bg-white border px-2 py-3 rounded border-gray-500 focus:outline-none">
                                        <div v-if="formBreweries.errors['address.city']" class="text-red-600">{{ formBreweries.errors['address.city'].toString() }}</div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-1/2">
                                    <div class=" flex flex-col mb-4 text-gray-500 lg:mr-4 mt-0">
                                        <div class="mb-2">Número</div>
                                        <input v-model="formBreweries.address.number"
                                               :class="formBreweries.errors['address.number'] ? 'border-red-600' : ''"
                                               placeholder="Digite um Número" name="number" type="text"
                                               class="block text-sm leading-none w-full appearance-none bg-white border px-2 py-3 rounded border-gray-500 focus:outline-none">
                                        <div v-if="formBreweries.errors['address.number']" class="text-red-600">{{ formBreweries.errors['address.number'].toString() }}</div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-1/2">
                                    <div class=" flex flex-col mb-4 text-gray-500 lg:mr-4 mt-0">
                                        <div class="mb-2">Telefone</div>
                                        <input v-model="formBreweries.phone"
                                               :class="formBreweries.errors.phone ? 'border-red-600' : ''"
                                               placeholder="Digite um Telefone" name="phone" type="text"
                                               class="block text-sm leading-none w-full appearance-none bg-white border px-2 py-3 rounded border-gray-500 focus:outline-none">
                                        <div v-if="formBreweries.errors.phone" class="text-red-600">{{ formBreweries.errors.phone.toString() }}</div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-1/2">
                                    <div class=" flex flex-col mb-4 text-gray-500 lg:mr-4 mt-0">
                                        <div class="mb-2">Web site</div>
                                        <input v-model="formBreweries.website"
                                               :class="formBreweries.errors.website ? 'border-red-600' : ''"
                                               placeholder="Digite um Telefone" name="website" type="text"
                                               class="block text-sm leading-none w-full appearance-none bg-white border px-2 py-3 rounded border-gray-500 focus:outline-none">
                                        <div v-if="formBreweries.errors.website" class="text-red-600">{{ formBreweries.errors.website.toString() }}</div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-2/2">
                                    <div class=" flex flex-col mb-4 text-gray-500 lg:mr-4 mt-0">
                                        <div class="mb-2">Descrição</div>
                                        <textarea v-model="formBreweries.descript"
                                                  :class="formBreweries.errors.descript ? 'border-red-600' : ''"
                                                  placeholder="Descrição da Cervejaria" name="descript" rows="5"
                                                  class="block text-sm leading-none w-full appearance-none bg-white border px-2 py-3 rounded border-gray-500 focus:outline-none"/>
                                        <div v-if="formBreweries.errors.descript" class="text-red-600">{{ formBreweries.errors.descript.toString() }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--FOOTER MODAL-->
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button @click.prevent="formBreweries.post('/breweries')" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Adicionar
                    </button>
                    <button @click.prevent="modalClose" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {useForm} from "@inertiajs/inertia-vue3";
import emitter from "../../services/eventHub"

export default {
    name: "ModalCreateBreweries",
    data() {
        return {
            modal: false
        }
    },
    setup() {
        const formBreweries = useForm({
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
        return {formBreweries}
    },
    mounted() {
        emitter.$on('modalActive', () => {
            this.modalActive()
        })
    },
    methods: {
        modalClose(){
            this.modal = false
            this.formBreweries.errors = null
        },
        modalActive() {
            this.modal = true
        }
    }
}
</script>

<style scoped>

</style>
