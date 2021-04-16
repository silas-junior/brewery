<template>
    <div class="bg-blue-400">
        <ul>
<!--            <li v-for="b in breweries" :key="b.id" class="">
                {{ b.name }}
            </li>-->

            teste
        </ul>
    </div>
</template>

<script>
export default {
    name: "Dashboard",
    props: {
      breweries: Object
    }
}
</script>
