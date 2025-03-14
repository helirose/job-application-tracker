<script setup lang="ts">
import Header from '@/components/Header.vue';
import Sidebar from '@/components/Sidebar.vue';
import { ref } from 'vue';

const isSidebarOpen = ref(false);

// Function to toggle the sidebar state
const toggleSidebar = () => {
    isSidebarOpen.value = !isSidebarOpen.value;
};
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
