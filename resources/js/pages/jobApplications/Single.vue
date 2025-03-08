<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import type { JobApplication } from '@/types';

const props = defineProps<{
    jobApplication: JobApplication;
}>();
</script>

<template>
    <AppLayout>
        <h1>{{ jobApplication.job_title }}</h1>
    </AppLayout>
</template>
