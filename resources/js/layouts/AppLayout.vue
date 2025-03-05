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
    <Sidebar :isOpen="isSidebarOpen" @open="isSidebarOpen = true" @close="isSidebarOpen = false" />
    <Header @toggle-sidebar="toggleSidebar" />
    <main class="p-5">
        <slot />
    </main>
</template>
