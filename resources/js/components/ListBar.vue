<script setup lang="ts">
import { ChevronDown } from 'lucide-vue-next';
</script>

<template>
    <div class="items-left flex hidden justify-between rounded-t-lg bg-indigo-200 p-4 md:block md:grid md:grid-cols-12 md:gap-8">
        <div class="md:col-span-2">
            <button class="font-semibold text-indigo-900">Status <ChevronDown class="inline" /></button>
        </div>
        <div class="md:col-span-6">
            <button class="font-semibold text-indigo-900">Position <ChevronDown class="inline" /></button>
        </div>
        <div class="md:col-span-2">
            <button class="font-semibold text-indigo-900">Date Applied <ChevronDown class="inline" /></button>
        </div>
        <div class="md:col-span-2">
            <button class="font-semibold text-indigo-900">Date Closing <ChevronDown class="inline" /></button>
        </div>
    </div>
</template>
