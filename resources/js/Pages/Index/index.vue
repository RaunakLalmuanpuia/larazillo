<template>
    <div> Index </div>
    <Link href="/hello">Show Pages</Link>
    <div>The Message is {{ message }}</div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
defineProps({
    message: String, // props are automatically inferred as a prop type.
})
</script>

