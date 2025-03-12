<script setup lang="ts">
import Documents from '@/components/Documents.vue';
import Timeline from '@/components/Timeline.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import type { ApplicationEvent, JobApplication } from '@/types';

const props = defineProps<{
    jobApplication: JobApplication;
    applicationEvents: Array<ApplicationEvent>;
}>();
</script>

<template>
    <AppLayout>
        <div class="mb-6">
            <p class="text-md">Your application for</p>
            <h1 class="my-2 mt-0 text-4xl font-semibold text-indigo-900">{{ jobApplication.job_title }}</h1>
            <p class="text-md">
                at <span class="font-semibold text-indigo-600">{{ jobApplication.company_name }}</span>
            </p>
        </div>
        <Timeline :events="applicationEvents" />
        <Documents />
    </AppLayout>
</template>
