<script setup lang="ts">
import ApplicationsList from '@/components/ApplicationsList.vue';
import UtilityBar from '@/components/UtilityBar.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import type { JobApplication } from '@/types';
import { PropType } from 'vue';

defineProps({
    jobApplications: {
        type: Array as PropType<JobApplication[]>,
        required: true,
    },
    statuses: {
        type: Array as PropType<string[]>,
        required: true,
    },
});
</script>

<template>
    <AppLayout>
        <UtilityBar class="mb-6" />
        <ApplicationsList :jobApplications="jobApplications" :statuses="statuses" />
    </AppLayout>
</template>
