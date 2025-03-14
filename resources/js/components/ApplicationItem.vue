<script setup lang="ts">
import Status from '@/components/Status.vue';
import { formatDate } from '@/lib/utils';
import type { JobApplication } from '@/types';
import { Link } from '@inertiajs/vue3';

defineProps<{
    jobApplication: JobApplication;
    index: number;
    length: number;
}>();
</script>

<template>
    <div
        class="flex flex-col justify-between bg-white p-4 transition md:grid md:grid-cols-12 md:flex-row md:gap-8"
        :class="[
            { 'border-b border-indigo-600 border-opacity-50': index !== length - 1 },
            { 'rounded-b-lg': index == length - 1 },
            { 'rounded-t-lg md:rounded-none': index == 0 },
        ]"
    >
        <div class="w-full md:col-span-2">
            <Status v-if="jobApplication.latest_event" :event="jobApplication.latest_event" />
        </div>
        <div class="md:col-span-6">
            <h3 class="w-full text-lg font-semibold text-gray-900 md:w-auto">
                <Link :href="route('jobApplication.show', { id: jobApplication.id })">
                    {{ jobApplication.job_title }} at {{ jobApplication.company_name }}
                </Link>
            </h3>
        </div>
        <div class="md:col-span-2">
            <p class="w-full text-gray-600 md:w-auto"><span class="md:hidden">Applied: </span>{{ formatDate(jobApplication.date_applied) }}</p>
        </div>
        <div class="md:col-span-2">
            <p class="w-full text-gray-600 md:w-auto">
                <span class="md:hidden">Closing: </span>{{ jobApplication.closing_date ? formatDate(jobApplication.closing_date) : '' }}
            </p>
        </div>
    </div>
</template>
