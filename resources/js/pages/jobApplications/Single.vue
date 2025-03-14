<script setup lang="ts">
import Documents from '@/components/Documents.vue';
import Timeline from '@/components/Timeline.vue';
import Breadcrumb from '@/components/ui/Breadcrumb.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import type { ApplicationEvent, JobApplication } from '@/types';

defineProps<{
    jobApplication: JobApplication;
    applicationEvents: Array<ApplicationEvent>;
}>();
</script>

<template>
    <AppLayout>
        <Breadcrumb />
        <div class="application-header mb-6 pb-6">
            <p class="text-lg">Your application for</p>
            <h1 class="my-2 mt-0 text-4xl font-semibold text-indigo-900">{{ jobApplication.job_title }}</h1>
            <p class="text-lg">
                at <span class="font-semibold text-indigo-600">{{ jobApplication.company_name }}</span>
            </p>
            <div class="my-6 border-l-4 border-indigo-900 pl-4">
                <p>
                    Contact:
                    {{ jobApplication?.contact_id }}
                </p>
                <p>Salary: From {{ jobApplication.salary_min }} to {{ jobApplication.salary_max }}</p>
            </div>
        </div>
        <Timeline :events="applicationEvents" />
        <Documents />
    </AppLayout>
</template>
