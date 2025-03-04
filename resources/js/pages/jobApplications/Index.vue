<script setup lang="ts">
import Sidebar from '@/components/Sidebar.vue';
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
    <div class="flex">
        <Sidebar />
        <main>
            <h1>Applications</h1>
            <div v-for="jobApplication in jobApplications" :key="jobApplication.id">Job: {{ jobApplication.job_title }}</div>
        </main>
    </div>
</template>
