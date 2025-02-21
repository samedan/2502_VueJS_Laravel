<template>
    <div>{{ listing.city }}, {{ listing.street_nr }}, {{ listing.street }}</div>
</template>

<script setup>
defineProps({
    listing: Object,
});
</script>
