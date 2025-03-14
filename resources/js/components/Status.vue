<script setup lang="ts">
import { ApplicationEvent } from '@/types';

const props = defineProps<{
    event: ApplicationEvent,
    statuses: Array<string>
}>();

</script>

<template>
    <select class="text-wrap rounded-md bg-indigo-700 p-2 text-white w-full" name="status" id="status">
        <option v-for="status in statuses" :value="status"
        :selected="event.status == status"
        >{{ status }}</option>
    </select>
</template>
