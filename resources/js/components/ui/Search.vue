<script setup lang="ts">
import { Search } from 'lucide-vue-next';
</script>

<template>
    <form class="w-full md:w-auto flex bg-none rounded-lg shadow-md">
        <input type="text" class="w-full rounded-l-lg p-1 border border-indigo-900 text-gray-900" />
        <button class="bg-indigo-900 rounded-r-lg p-1 border-t border-r border-b border-indigo-900" type="submit"><Search class="text-white"/></button>
    </form>
</template>