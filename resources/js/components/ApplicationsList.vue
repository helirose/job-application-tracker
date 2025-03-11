<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import type { JobApplication } from '@/types';
import { PropType } from 'vue';
import ApplicationItem from '@/components/ApplicationItem.vue';
import ListBar from '@/components/ListBar.vue';

defineProps({
    jobApplications: Array as PropType<JobApplication[]>,
});
</script>

<template>
    <ListBar />
    <ApplicationItem v-for="jobApplication in jobApplications" :key="jobApplication.id" :jobApplication="jobApplication" />
</template>