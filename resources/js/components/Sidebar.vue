<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3';
import { Copyright, X } from 'lucide-vue-next';
import { computed, onMounted, onUnmounted } from 'vue';

const props = defineProps({
    isOpen: Boolean,
});

const page = usePage();
const user = computed(() => page.props.auth.user);

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
    <!-- Sidebar -->
    <div
        id="sidebar"
        ref="sidebar"
        :class="[
            'sidebar fixed left-0 top-0 h-screen w-screen bg-indigo-900 text-white transition-transform md:relative md:flex md:h-auto md:w-1/5',
            isOpen ? 'translate-x-0' : '-translate-x-full md:translate-x-0',
        ]"
    >
        <div class="flex flex-wrap items-start">
            <nav class="flex-grow p-4">
                <ul>
                    <li class="py-2"><Link href="/">Home</Link></li>
                    <li class="py-2"><Link href="/">Resources</Link></li>
                    <Divider />
                    <li v-if="user" class="py-2"><Link href="/job-applications">My applications</Link></li>
                    <li v-if="user" class="py-2"><Link href="/contacts">My contacts</Link></li>
                    <li v-if="!user" class="py-2"><Link :href="route('login')">Login</Link></li>
                    <li v-if="user" class="py-2"><Link :href="route('logout')" method="post">Logout</Link></li>
                </ul>
            </nav>
            <button class="flex-none p-4" @click="$emit('close')" :class="[!props.isOpen ? 'hidden' : 'block']" aria-label="Close sidebar">
                <X class="m-2 text-white" />
            </button>
            <div class="justify-left flex w-full items-center self-end p-4">
                <span class="flex items-center text-sm"><Copyright class="h-4" /> Charlotte Rees 2025</span>
            </div>
        </div>
    </div>
</template>

<style scoped>
.sidebar {
    z-index: 999;
}
</style>
