<template>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3">
        <Listing v-for="listing in listings" :key="listing.id" :listing ="listing"/>

    </div>
    </template>
    
    <script setup>
    import Listing from '/resources/js/pages/Listing/Index/Components/Listing.vue'
     
     defineProps({
        listings: Array,
     })
    </script>