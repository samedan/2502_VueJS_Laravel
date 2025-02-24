<template>
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/hello">Show Page</Link>

    <!-- <div>The page with time: {{ timer }}</div> -->

    <!-- Flash Messages -->
    <div v-if="flashSuccess" class="success">
        {{ flashSuccess }}
    </div>

    <slot>Default </slot>
</template>

<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const flashSuccess = computed(() => page.props.flash.success);

// page.props.flash.success
const page = usePage();
</script>

<style scoped>
.success {
    background-color: green;
    color: white;
}
</style>
