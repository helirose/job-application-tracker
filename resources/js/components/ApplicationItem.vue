<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import type { JobApplication } from '@/types';
import { Briefcase, Calendar } from 'lucide-vue-next';

const props = defineProps<{
    jobApplication: JobApplication;
}>();
</script>

<template>
    <div class="flex flex-col items-center justify-between rounded-lg border border-gray-200 bg-white p-4 shadow-md transition hover:shadow-lg">
        <h3 class="w-full text-lg font-semibold text-gray-900">
            <Link :href="route('jobApplication.show', { id: jobApplication.id })">
                {{ jobApplication.job_title }} at {{ jobApplication.company_name }}
            </Link>
        </h3>
        <p class="w-full flex items-center gap-2 text-gray-600"><Briefcase class="h-4 w-4 text-gray-400" /> {{ jobApplication.company_name }}</p>
        <p class="w-full flex items-center gap-2 text-gray-600"><Calendar class="h-4 w-4 text-gray-400" /> Applied: {{ jobApplication.date_applied }}</p>
    </div>
</template>
