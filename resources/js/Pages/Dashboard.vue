<template>
    <div class="bg-blue-400">
        <ul>
            <li v-for="b in breweries.data" :key="b.id" class="">
                {{ b.name }}
            </li>
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
