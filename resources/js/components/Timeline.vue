<script setup lang="ts">
import { formatDate } from '@/lib/utils';
import type { ApplicationEvent } from '@/types';
import { CircleChevronDown } from 'lucide-vue-next';
import { PropType } from 'vue';

const props = defineProps({
    events: {
        type: Array as PropType<ApplicationEvent[]>,
        default: () => [], // Ensures it's never undefined
    }
});
</script>

<template>
    <button class="bg-indigo-900 p-2 text-white">Update Status</button>
    <div class="m-4">
        <ul :class="{ 'timeline': events.length > 1, 'relative' : true }" v-for="event in events" :key="event.id">
            <li class="flex">
                <span class="timeline-icon mr-4"><CircleChevronDown class="bg-white text-indigo-900" /></span>
                {{ event.status }} <br />{{ formatDate(event.created_at) }}
            </li>
        </ul>
    </div>
</template>

<style scoped>
/* Fix icon alignment and viewbox space */
.timeline-icon {
    z-index: 998;
    position: relative;
    width: 22px;
    height: 22px;
    overflow: hidden;
}

.timeline-icon svg {
    position: absolute;
    top: -1px;
    left: -1px;
    overflow: hidden;
}

/* Timeline styling */
ul.timeline li {
    position: relative;
    margin-bottom: 0;
    padding-bottom: 2.5em;
}

ul.timeline li:before {
    content: '';
    position: absolute;
    left: 10px;
    border-left: 2px solid rgb(49, 46, 129);
    height: 100%;
    width: 1px;
}

ul.timeline li:first-child:before {
    top: 21px; /* moves the line down so that it disappears under the bullet. Adjust manually */
}

ul.timeline li:last-child:before {
    height: 3px; /* shorten the line so it goes only up to the bullet. Is equal to first-child:before's top */
}
</style>
