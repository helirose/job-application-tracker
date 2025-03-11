<script setup lang="ts">
import { ChevronDown } from 'lucide-vue-next';
</script>

<template>
    <div class="hidden md:block flex items-center justify-between md:grid md:grid-cols-4 rounded-t-md bg-indigo-200 p-4 text-left">
        <div>
            <button class="font-semibold text-indigo-900">Status <ChevronDown class="inline" /></button>
        </div>
        <div>
            <button class="font-semibold text-indigo-900">Position <ChevronDown class="inline" /></button>
        </div>
        <div>
            <button class="font-semibold text-indigo-900">Date Applied <ChevronDown class="inline" /></button>
        </div>
        <div>
            <button class="font-semibold text-indigo-900">Date Closing <ChevronDown class="inline" /></button>
        </div>
    </div>
</template>
