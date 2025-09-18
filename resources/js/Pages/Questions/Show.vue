<script setup>
defineProps({
    question: {
        type: Object,
        required: true,
    }
})
</script>
<template>
    <h1>
        hello world
    </h1>

    <div class="card w-50">
        <div class="card card-title">
           <p>
            {{ question.title }}
            </p> 
        </div>
        <div class="card-body">
            <strong>Message : </strong>{{ question.body }}
            {{ question.created_at }}
        </div>
    </div>
</template>
