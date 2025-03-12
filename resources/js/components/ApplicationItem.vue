<script setup lang="ts">
import Status from '@/components/Status.vue';
import type { JobApplication } from '@/types';
import { Link } from '@inertiajs/vue3';

const props = defineProps<{
    jobApplication: JobApplication;
}>();

console.log(props.jobApplication);
</script>

<template>
    <div
        class="my-4 flex flex-col justify-between border-b border-indigo-700 border-opacity-50 bg-white p-4 transition md:grid md:grid-cols-4 md:flex-row"
    >
        <div class="w-full">
            <Status v-if="jobApplication.latest_event" :event="jobApplication.latest_event" />
        </div>
        <h3 class="w-full text-lg font-semibold text-gray-900 md:w-auto">
            <Link :href="route('jobApplication.show', { id: jobApplication.id })">
                {{ jobApplication.job_title }} at {{ jobApplication.company_name }}
            </Link>
        </h3>
        <p class="w-full text-gray-600 md:w-auto"><span class="md:hidden">Applied: </span>{{ jobApplication.date_applied }}</p>
        <p class="w-full text-gray-600 md:w-auto"><span class="md:hidden">Closing: </span>{{ jobApplication.closing_date }}</p>
    </div>
</template>
