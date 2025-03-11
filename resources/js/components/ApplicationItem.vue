<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import type { JobApplication } from '@/types';
import Status from '@/components/Status.vue';

const props = defineProps<{
    jobApplication: JobApplication;
}>();

console.log(props.jobApplication);
</script>

<template>
    <div class="flex flex-col md:flex-row justify-between bg-white p-4 transition my-4 border-b border-indigo-700 border-opacity-50 md:grid md:grid-cols-4">
        <div class="w-full">
            <!--<Status v-if="jobApplication.latestEvent.status" :event="jobApplication.latestEvent.status" />-->
        </div>
        <h3 class="w-full md:w-auto text-lg font-semibold text-gray-900">
            <Link :href="route('jobApplication.show', { id: jobApplication.id })">
                {{ jobApplication.job_title }} at {{ jobApplication.company_name }}
            </Link>
        </h3>
        <p class="w-full md:w-auto text-gray-600"><span class="md:hidden">Applied: </span>{{ jobApplication.date_applied }}</p>
        <p class="w-full md:w-auto text-gray-600"><span class="md:hidden">Closing: </span>{{ jobApplication.closing_date }}</p>
    </div>
</template>
