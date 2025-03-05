<script setup lang="ts">
import { Menu } from 'lucide-vue-next';
import { defineProps } from 'vue';

const props = defineProps({
    isOpen: Boolean,
});
</script>

<template>
    <div class="bg-gray-800">
        <!-- Mobile Toggle Button -->
        <button
            @click="$emit('toggle-sidebar')"
            :class="['block bg-gray-800 p-2 text-white md:hidden', props.isOpen ? 'hidden' : 'block']"
            aria-label="Open sidebar"
        >
            <Menu />
        </button>
    </div>
</template>
