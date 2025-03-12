<script setup lang="ts">
import { ApplicationEvent } from '@/types';

const props = defineProps<{
    event: ApplicationEvent;
}>();

console.log(props.event);
</script>

<template>
    <span class="block rounded-md bg-indigo-700 text-white">
        {{ event.status }}
    </span>
</template>
