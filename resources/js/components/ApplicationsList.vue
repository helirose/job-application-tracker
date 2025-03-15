<script setup lang="ts">
import ApplicationItem from '@/components/ApplicationItem.vue';
import ListBar from '@/components/ListBar.vue';
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
    <div class="rounded-lg border border-indigo-900 shadow-md">
        <ListBar />
        <ApplicationItem
            v-for="(jobApplication, index) in jobApplications"
            :key="jobApplication.id"
            :jobApplication="jobApplication"
            :index="index"
            :length="jobApplications.length"
            :statuses="statuses"
        />
    </div>
</template>
