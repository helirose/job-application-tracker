<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import Details from '@/components/Details.vue';
import Timeline from '@/components/Timeline.vue';
import Documents from '@/components/Documents.vue';
import type { JobApplication } from '@/types';
import type { ApplicationEvent } from '@/types';

const props = defineProps<{
    jobApplication: JobApplication;
    applicationEvents: Array<ApplicationEvent>;
}>();
</script>

<template>
    <AppLayout>
        <h1>Your application to {{ jobApplication.job_title }}</h1>
        <Details />
        <Timeline :events="applicationEvents" />
        <Documents />
    </AppLayout>
</template>
