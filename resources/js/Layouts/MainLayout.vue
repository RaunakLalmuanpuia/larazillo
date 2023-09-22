<template>

<header class="w-full bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900"> 
 <div class="container mx-auto">
    <nav class="flex items-center justify-between p-4">
        <div class="text-lg font-medium">
            <Link href="/listing">Listing</Link>
        </div> 
        <div class="text-xl font-bold text-center text-indigo-600 dark:text-indigo-300">
            <Link href="/listing">LaraZillow</Link>
        </div>
        <div>
            <Link href="/listing/create" class="btn-primary">+ New Listing</Link>
        </div>
    </nav>
 </div>
</header>
<main class="container w-full p-4 mx-auto"> 
    <!-- <div v-if="flashsuccess" class="p-2 mb-4 border border-green-200 rounded-md shadow-sm dark:border-green-800 bg-green-50 dark:bg-green-900">
    {{ flashsuccess}}
    </div> -->
<slot>Default</slot>
</main>



</template>

<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3'
import { usePage } from '@inertiajs/inertia-vue3';



const page = usePage();
const flashsuccess = computed(()=>page.props.value.flash.success)

</script>