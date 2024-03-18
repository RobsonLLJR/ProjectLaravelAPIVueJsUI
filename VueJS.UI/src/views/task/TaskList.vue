<script setup>
import { onMounted, ref } from 'vue';
import { getTask } from '../../services/task/taskService';

onMounted(() =>
{
    getTask().then((response) => {
        if(response.success){
            console.log(response);
        }
    });
});



</script>

<template>
    <p>Cheguei na listagem das tarefas</p>
</template>