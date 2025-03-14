<script setup lang="ts">
import Button from '@/components/ui/Button.vue';
import Search from '@/components/ui/Search.vue';
</script>

<template>
    <div class="flex items-stretch justify-start gap-2 rounded-lg">
        <Search />
        <Button :icon='"plus"' :label='"New application"' />
    </div>
</template>
