<script setup lang="ts">
import { ApplicationEvent } from '@/types';


const props = defineProps<{
    event: ApplicationEvent;
}>();

</script>

<template>
    <span class="block rounded-md text-white bg-indigo-700">
        {{ event.status }}
    </span>
</template>