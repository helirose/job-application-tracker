<script setup lang="ts">
import type { ApplicationEvent } from '@/types';

const props = defineProps<{
    events: ApplicationEvent;
}>();

</script>

<template>
    <div v-for="event in events">
        {{ event }}
    </div>
</template>