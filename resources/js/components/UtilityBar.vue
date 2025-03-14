<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import Button from '@/components/ui/Button.vue';
import Search from '@/components/ui/Search.vue';
</script>

<template>
    <div class="flex items-stretch justify-start gap-2 rounded-lg">
        <Search />
        <!--:icon='"plus"' :label='"New application"'--> 
        <Link :href="route('jobApplication.create')" class="block p-2 rounded-lg shadow-md bg-indigo-900 text-white">New application</Link>
    </div>
</template>
