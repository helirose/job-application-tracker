<script setup lang="ts">
import { PropType } from 'vue';

interface JobApplication {
    id: number;
    job_title: string;
    company_name: string;
    status: string;
}

defineProps({
    jobApplications: Array as PropType<JobApplication[]>,
});
</script>

<template>
    <div v-for="jobApplication in jobApplications" :key="jobApplication.id">Job: {{ jobApplication.job_title }}</div>
</template>
