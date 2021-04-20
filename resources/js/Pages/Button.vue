<template>
<!--    <div>-->
    <form action="POST">
        <label></label>
        <input type="text" placeholder="Digite um nome" v-model="name">
        <inertia-link :href="route('breweries.index')">
            Clique aqui
        </inertia-link>
    </form>
<!--    </div>-->
</template>

<script>
export default {
    name: "Button",
    data() {
        return{
            name: ''
        }
    }
}
</script>

<style scoped>

</style>
