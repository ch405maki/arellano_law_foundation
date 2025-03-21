<template>
    <li v-for="(item, index) in links" :key="index" class="mb-2 text-official-purple-800">
        <a :href="item.url" class="text-sm md:text-base lg:text-lg xl:text-lg font-normal text-official-purple-800 hover:underline">{{ item.text }}</a>
    </li>
</template>

<script setup>
    import { ref } from 'vue';

    const links = ref([
        { text: 'AUSL', url: 'https://alf2.arellanolaw.edu/' },
        { text: 'Bar Review', url: '/programs/bar' },
        { text: 'LawPhil', url: 'https://lawphil.net/' },
        { text: 'MCLE', url: '/programs/mcle' },
        { text: 'Phoenix', url: '/programs/phoenix' },
    ]);

</script>