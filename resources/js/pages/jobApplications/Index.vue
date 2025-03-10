<script setup lang="ts">
import ApplicationItem from '@/components/ApplicationItem.vue';
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
        <div>
            <ApplicationItem v-for="jobApplication in jobApplications" :key="jobApplication.id" :jobApplication="jobApplication" />
        </div>
    </AppLayout>
</template>
