<template>
    <!--    <div>-->
    <form @submit.prevent="id.delete('/breweries')">
        <label>Nome</label>
        <input type="text" placeholder="Digite um nome" v-model="form.name">
        <div class="pt-12">
            <label>Endereço</label>
            <input type="text" placeholder="Digite um País" v-model="form.address.country">
            <input type="text" placeholder="Digite um Estado" v-model="form.address.state">
            <input type="text" placeholder="Digite uma Cidade" v-model="form.address.city">
        </div>

        <!--        <inertia-link ">-->
        <button type="submit" @click.prevent="id.delete('/breweries')">
            <span>Cadastrar</span>
        </button>
        <!--        </inertia-link>-->
    </form>
    <!--    </div>-->
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3'

export default {
    name: "Button",
    // data() {
    //     return {
    //         name: '',
    //         address: {
    //             country: '',
    //             state: '',
    //             city: ''
    //         }
    //     }
    // },
    setup () {
        const id = useForm({
            id: 1
        })
        const form = useForm({
            name: null,
            address: {
                country: null,
                state: null,
                city: null,
            },
        })


        return { form, id }
    },
}
</script>

<style scoped>

</style>
