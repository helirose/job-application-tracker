<script setup lang="ts">
import { ChevronDown } from 'lucide-vue-next';
</script>

<template>
    <div class="flex hidden items-center justify-between rounded-t-md bg-indigo-200 p-4 text-left md:block md:grid md:grid-cols-4 md:gap-x-4">
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
