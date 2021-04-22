<template>
    <!--NEW -->
    <section class="w-full p-4 my-4 rounded-lg bg-white border border-gray-100">
        <div class="flex flex-row items-center justify-between my-4">
            <div class="flex flex-col">
                <div class="text-sm font-light text-gray-500">Editar Endereço</div>
                <div class="text-sm font-medium mt-2">
                    <span>Nome:{{ form.name}}</span>
                </div>
            </div>
            <div class="">
                <inertia-link :href="route('breweries.index')" class="flex justify-center items-center justify-center text-sm p-2 focus:outline-none">
                    <i class='bx bxs-arrow-to-left text-gray-700 mr-1 text-2xl'></i>
                    <span class="font-semibold text-gray-700">Voltar</span>
                </inertia-link>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row lg:flex-wrap w-full lg:space-x-4 mt-6 mb-4">
            <div class="w-full lg:w-1/5">
                <div class=" flex flex-col mb-4 text-gray-500">
                    <div class="mb-2">Nome</div>
                    <input placeholder="Digite um País" v-model="form.name" name="name" type="text" class="block text-sm leading-none w-full appearance-none bg-white border px-2 py-3 rounded border-gray-500 focus:outline-none">
                </div>
            </div>
            <div class="w-full lg:w-1/5">
                <div class=" flex flex-col mb-4 text-gray-500">
                    <div class="mb-2">País</div>
                    <input placeholder="Digite um País" v-model="form.address.country" name="name" type="text" class="block text-sm leading-none w-full appearance-none bg-white border px-2 py-3 rounded border-gray-500 focus:outline-none">
                </div>
            </div>
            <div class="w-full lg:w-1/5">
                <div class=" flex flex-col mb-4 text-gray-500">
                    <div class="mb-2">Cidade</div>
                    <input placeholder="Digite um País" v-model="form.address.city" name="name" type="text" class="block text-sm leading-none w-full appearance-none bg-white border px-2 py-3 rounded border-gray-500 focus:outline-none">
                </div>
            </div>
            <div class="w-full lg:w-1/5">
                <div class=" flex flex-col mb-4 text-gray-500">
                    <div class="mb-2">Número</div>
                    <input placeholder="Digite um País" v-model="form.address.number" name="name" type="text" class="block text-sm leading-none w-full appearance-none bg-white border px-2 py-3 rounded border-gray-500 focus:outline-none">
                </div>
            </div>
        </div>

        <button type="submit" @click.prevent="update(brewery.id, form)" class="flex justify-center items-center justify-center bg-indigo-500 hover:bg-indigo-600 rounded-md text-white font-medium block text-sm p-2 focus:outline-none mb-4">
            <span>Atualizar</span>
        </button>
    </section>
</template>

<script>

export default {
    name: "EditBrewery",
    props: {
        brewery: Object
    },
    data() {
        return {
            form: {
                name: this.brewery.name,
                address: {
                    country: this.brewery.address.country,
                    city: this.brewery.address.city,
                    number: this.brewery.address.number,
                },
                phone: this.brewery.phone,
            }
        }
    },
    methods: {
        update(id, data) {
            data._method = 'PUT'
            console.log(data)
            this.$inertia.post(`/breweries/${id}`, data)
        }
    },
    // setup() {
    //     const form = useForm({
    //         name: this.props.brewery(),
    //         address: {
    //             country: null,
    //             state: null,
    //             city: null,
    //         },
    //     })
    //
    //
    //     return {form}
    // },
}
</script>

<style scoped>

</style>
