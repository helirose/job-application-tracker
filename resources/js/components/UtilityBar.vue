<script setup lang="ts">
import Search from '@/components/ui/Search.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="flex items-stretch justify-start gap-2 rounded-lg">
        <Search />
        <!--:icon='"plus"' :label='"New application"'-->
        <Link href="job-applications/create" class="block rounded-lg bg-indigo-900 p-2 text-white shadow-md">New application</Link>
    </div>
</template>
