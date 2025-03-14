<script setup lang="ts">
import { Menu } from 'lucide-vue-next';
import { defineProps } from 'vue';

const props = defineProps({
    isOpen: Boolean,
});
</script>

<template>
    <div class="block w-full bg-indigo-900 md:hidden">
        <!-- Mobile Toggle Button -->
        <button
            @click="$emit('toggle-sidebar')"
            :class="['block p-2 text-white md:hidden', props.isOpen ? 'hidden' : 'block']"
            aria-label="Open sidebar"
        >
            <Menu />
        </button>
    </div>
</template>
