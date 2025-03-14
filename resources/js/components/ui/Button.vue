<script setup lang="ts">
defineProps<{
    icon: string;
    label: string;
}>();
</script>

<template>
    <button id="" class="block p-2 rounded-lg shadow-md bg-indigo-900 text-white">{{ label }}</button>
</template>