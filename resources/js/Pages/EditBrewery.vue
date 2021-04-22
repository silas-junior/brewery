<template>
    <div class="container">
        <inertia-link :href="route('breweries.index')">
            Voltar
        </inertia-link>
        {{ brewery.id }}
        <form>
            <label>Nome</label>
            <input type="text" placeholder="Digite um nome" v-model="form.name">
            <div class="pt-12">
                <label>Endereço</label>
                <input type="text" placeholder="Digite um País" v-model="form.address.country">
                <input type="text" placeholder="Digite uma Cidade" v-model="form.address.city">
                <input type="text" placeholder="Digite um Número" v-model="form.address.number">
            </div>

            <!--        <inertia-link ">-->
            <button type="submit" @click.prevent="update(brewery.id, form)">
                <span>Cadastrar</span>
            </button>
        </form>
    </div>
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
            // this.$inertia.post(`/breweries/${id}`, data)
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
