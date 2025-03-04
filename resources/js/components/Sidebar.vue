<script setup lang="ts">
import { ref } from 'vue';

const isOpen = ref(false);

const toggleSidebar = () => {
    isOpen.value = !isOpen.value;
};
</script>

<template>
    <div>
        <!-- Sidebar Toggle Button (Mobile) -->
        <button @click="toggleSidebar">☰</button>

        <!-- Sidebar -->
        <aside>
            <button @click="toggleSidebar" class="mb-4 hidden text-white md:block">
                {{ isOpen ? '<<' : '>>' }}
            </button>

            <nav>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Recruiters</a></li>
                </ul>
            </nav>
        </aside>
    </div>
</template>

<style scoped>
/* Add styles if needed */
</style>
