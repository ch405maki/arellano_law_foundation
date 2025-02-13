<template>
    <div class="bg-official-purple-300">
    <div class="max-w-6xl mx-auto px-4 py-4 lg:py-8">
        <div class="px-4 flex justify-between flex-shrink-0 mb-2">
            <h1 class="font-bold text-lg sm:text-xl md:text-xl lg:text-2xl xl:text-2xl">Announcement</h1>
            <a href="" class="ml-auto bg-official-purple-800 text-white p-2 rounded-lg hover:bg-official-purple-700 transition">View All Announcement</a>
        </div>
        <ul class=" divide-y divide-gray-200">
            <li class="px-6 py-4" v-for="announcement in announcements">
                <div class="flex justify-between">
                    <span class="font-semibold text-lg">{{ announcement.title }}</span>
                    <span class="text-gray-500 text-xs">Posted: {{ announcement.datePosted }}</span>
                </div>
                <p class="text-gray-700">{{ announcement.content }}</p>
            </li>
        </ul>
    </div>
    </div>
</template>

<script setup>

const announcements = [
    {
        title: 'List Item 1',
        datePosted: 'January 20, 2025',
        content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.'
    },
    {
        title: 'List Item 2',
        datePosted: 'January 20, 2025',
        content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.'
    },
    {
        title: 'List Item 3',
        datePosted: 'January 20, 2025',
        content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.'
    },
    {
        title: 'List Item 3',
        datePosted: 'January 20, 2025',
        content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.'
    },
  // Add more announcements here...
];
</script>