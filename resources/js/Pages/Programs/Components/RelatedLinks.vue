<template>
    <li v-for="(item, index) in links" :key="index" class="mb-2 text-official-purple-800">
        <a :href="item.url" class="text-lg font-normal text-official-purple-800 hover:underline">{{ item.text }}</a>
    </li>
</template>

<script setup>
    import { ref } from 'vue';

    const links = ref([
    { text: 'AUSL', url: 'https://arellanolaw.edu' },
    { text: 'Bar Review', url: 'programs/bar' },
    { text: 'Lawphil', url: 'https://lawphil.net/' },
    { text: 'MCLE', url: 'programs/mcle' },
    { text: 'Phoenix', url: '#' },
    ]);

</script>