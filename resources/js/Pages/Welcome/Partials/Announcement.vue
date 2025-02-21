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
                    <a href="">
                        <span class="text-gray-800"> Posted By: {{ announcement.department }}</span> <br> 
                        <span class="font-semibold text-lg text-gray-900 hover:text-official-purple-950 hover:underline">{{ announcement.title }}</span></a>
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
        title: 'Job Opening: Technical Support Specialist',
        department: 'Human Resources',
        datePosted: 'January 28, 2025',
        content: 'The Arellano Law Foundation is seeking a highly skilled and motivated Technical Support Specialist to join our team. The successful candidate will provide technical assistance and support to our staff and students.'
    },
    {
        title: 'ALF Hosts Successful Seminar on Legal Ethics',
        department: 'Human Resources',
        datePosted: 'January 10, 2025',
        content: 'The Arellano Law Foundation recently hosted a successful seminar on legal ethics, which was attended by law students, lawyers, and judges from across the country.'
    },
    {
        title: 'Accounting Department Implements New Financial Management System',
        department: 'Accounting',
        datePosted: 'January 9, 2025',
        content: 'The Accounting Department is pleased to announce the implementation of a new financial management system, designed to improve financial reporting and transparency.'
    },

    {
        title: 'ITC Department Upgrades Network Infrastructure for Improved Connectivity',
        department: 'Information Technology Center',
        datePosted: 'January 8, 2025',
        content: 'The Information Technology Center (ITC) has successfully upgraded the network infrastructure, providing faster and more reliable connectivity for all users.'
    },


  // Add more announcements here...
];
</script>