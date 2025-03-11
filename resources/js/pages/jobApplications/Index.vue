<script setup lang="ts">
import ApplicationsList from '@/components/ApplicationsList.vue';
import UtilityBar from '@/components/UtilityBar.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import type { JobApplication } from '@/types';
import { PropType } from 'vue';

defineProps({
    jobApplications: Array as PropType<JobApplication[]>,
});
</script>

<template>
    <AppLayout>
        <UtilityBar class="mb-6" />
        <ApplicationsList :jobApplications="jobApplications" />
    </AppLayout>
</template>
