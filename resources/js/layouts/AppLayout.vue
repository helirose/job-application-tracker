<script setup lang="ts">
import Header from '@/components/Header.vue';
import Sidebar from '@/components/Sidebar.vue';
import { BreadcrumbItemType } from '@/types';
import { ref } from 'vue';

const isSidebarOpen = ref(false);

// Function to toggle the sidebar state
const toggleSidebar = () => {
    isSidebarOpen.value = !isSidebarOpen.value;
};

// TypeScript interface to define the expected structure of props
interface Props {
    breadcrumbs?: BreadcrumbItemType[]; // breadcrumbs prop, an optional array of BreadcrumbItemType
}

// Use withDefaults to provide a default value for breadcrumbs if none is passed in
withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [], // Default value is an empty array
});
</script>

<template>
    <div class="flex min-h-screen flex-col bg-gray-100 md:flex-row md:items-stretch">
        <Sidebar :isOpen="isSidebarOpen" @open="isSidebarOpen = true" @close="isSidebarOpen = false" />
        <Header @toggle-sidebar="toggleSidebar" />
        <main class="w-full p-5">
            <slot />
        </main>
    </div>
</template>
