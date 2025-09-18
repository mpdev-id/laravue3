<template>
 <h1>
    hello world
 </h1>
 <div v-for="question in questions" :key="question.id" >
    <Link :href="`/questions/${question.id}`">
        {{ question.title }}
    </Link>
 </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
    defineProps({
        questions: {
        type: Array,
        required: true,
    }})
</script>