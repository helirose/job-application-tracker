<script setup lang="ts">
import { X } from 'lucide-vue-next';
import { defineEmits, defineProps, onMounted, onUnmounted } from 'vue';

const props = defineProps({
    isOpen: Boolean,
});
let startX = 0; // Store initial touch position

const emit = defineEmits(['close', 'open', 'isOpen']);

// Detect swipe gesture
const handleTouchStart = (event: TouchEvent) => {
    startX = event.touches[0].clientX;
};

const handleTouchEnd = (event: TouchEvent) => {
    const endX = event.changedTouches[0].clientX;
    const diff = endX - startX;

    // Swipe right (open) if starting near left edge and moving right
    if (startX < 50 && diff > 50) {
        emit('open');
    }

    // Swipe left (close) if sidebar is open
    if (props.isOpen && diff < -50) {
        emit('close');
    }
};

// Add swipe listeners when mounted
onMounted(() => {
    document.addEventListener('touchstart', handleTouchStart);
    document.addEventListener('touchend', handleTouchEnd);
});

// Remove listeners when component unmounts
onUnmounted(() => {
    document.removeEventListener('touchstart', handleTouchStart);
    document.removeEventListener('touchend', handleTouchEnd);
});
</script>

<template>
    <div>
        <!-- Sidebar -->
        <div
            id="sidebar"
            ref="sidebar"
            :class="[
                'fixed left-0 top-0 h-screen w-screen bg-gray-800 text-white transition-transform md:relative md:w-[25vw]',
                isOpen ? 'translate-x-0' : '-translate-x-full md:translate-x-0',
            ]"
        >
            <button @click="$emit('close')" :class="[!props.isOpen ? 'hidden' : 'block']" aria-label="Close sidebar">
                <X class="h-6 w-6 text-gray-500" />
            </button>
            <nav class="p-4">
                <ul>
                    <li class="p-2 hover:bg-gray-700"><a href="#">Applications</a></li>
                    <li class="p-2 hover:bg-gray-700"><a href="#">Settings</a></li>
                </ul>
            </nav>
        </div>
    </div>
</template>
