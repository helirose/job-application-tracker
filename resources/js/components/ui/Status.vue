<script setup lang="ts">

const props = defineProps<{
    status: string;
}>();

</script>

<template>
    <div>
        {{ status }}
    </div>
</template>