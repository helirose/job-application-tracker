<script setup lang="ts">
import { ApplicationEvent } from '@/types';

const props = defineProps<{
    event: ApplicationEvent;
}>();
</script>

<template>
    <span class="rounded-md bg-indigo-700 p-2 text-white">
        {{ event.status }}
    </span>
</template>
