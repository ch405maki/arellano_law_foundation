<template>
<Head title="Welcome" />
<MainLayout>
    <Carousel />
    <Card />
    <Announcement />
    <News />
    <RelatedWeb />
</MainLayout>
</template>

<script setup>
    import MainLayout from '@/Layouts/MainLayout.vue';
    import { Head } from '@inertiajs/vue3';
    import Carousel from './Partials/Carousel.vue';
    import Card from './Partials/Card.vue';
    import Announcement from './Partials/Announcement.vue';
    import News from './Partials/News.vue';
    import RelatedWeb from './Partials/RelatedWeb.vue';


</script>

<style>

</style>
