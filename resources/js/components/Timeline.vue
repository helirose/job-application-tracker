<script setup lang="ts">
import { formatDate } from '@/lib/utils';
import type { ApplicationEvent } from '@/types';
import { CircleChevronDown } from 'lucide-vue-next';
import { PropType } from 'vue';

defineProps({
    events: Array as PropType<ApplicationEvent[]>,
});
</script>

<template>
    <button class="bg-indigo-900 p-2 text-white">Update Status</button>
    <div class="m-4">
        <ul class="timeline relative" v-for="event in events" :key="event.id">
            <li class="flex">
                <span class="timeline-icon mr-4"><CircleChevronDown class="bg-white text-indigo-900" /></span>
                {{ event.status }} <br />{{ formatDate(event.created_at) }}
            </li>
        </ul>
    </div>
</template>

<style scoped>
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
    position: relative; /* so that pseudoelements are positioned relatively to their "li"s*/
    /* use padding-bottom instead of margin-bottom.*/
    margin-bottom: 0; /* This overrides previously specified margin-bottom */
    padding-bottom: 2.5em;
}

ul.timeline li:before {
    /* lines */
    content: '';
    position: absolute;
    left: 10px; /* adjust manually */
    border-left: 2px solid rgb(49, 46, 129);
    height: 100%;
    width: 1px;
}

ul.timeline li:first-child:before {
    /* first li's line */
    top: 21px; /* moves the line down so that it disappears under the bullet. Adjust manually */
}

ul.timeline li:last-child:before {
    /* last li's line */
    height: 3px; /* shorten the line so it goes only up to the bullet. Is equal to first-child:before's top */
}
</style>
