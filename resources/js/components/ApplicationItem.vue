<script setup lang="ts">
import Status from '@/components/ui/Status.vue';
import type { JobApplication } from '@/types';
import { Briefcase, Calendar } from 'lucide-vue-next';

const props = defineProps<{
    jobApplication: JobApplication;
}>();
</script>

<template>
    <div class="flex items-center justify-between rounded-lg border border-gray-200 bg-white p-4 shadow-md transition hover:shadow-lg">
        <div>
            <h3 class="text-lg font-semibold text-gray-900"><Link href="/job-applications/?id=" >{{ jobApplication.job_title }}</Link></h3>
            <p class="flex items-center gap-2 text-gray-600"><Briefcase class="h-4 w-4 text-gray-400" /> {{ jobApplication.company_name }}</p>
            <p class="flex items-center gap-2 text-gray-600"><Calendar class="h-4 w-4 text-gray-400" /> Applied: {{ jobApplication.date_applied }}</p>
        </div>
    </div>
</template>
