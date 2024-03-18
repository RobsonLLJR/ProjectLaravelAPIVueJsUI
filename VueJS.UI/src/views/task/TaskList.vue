<script setup>
import { onMounted, ref } from 'vue';
import { getTask } from '../../services/task/taskService';

const taskCollection = ref([]);

onMounted(() => {
    getTask().then((response) => {
        taskCollection.value = response.data;
        console.log(response.data);
    });
});

</script>
<template>
    <div class="container">
        <div class="x_painel">
            <div class="x_title">
                <h2 class="mt-2 me-4">Tarefas</h2>
            </div>
            <div class="row mb-2 mt-2 d-flex justify-content-end">
                <div class="col d-md-flex justify-content-md-end">
                    <RouterLink class="btn btn-success" to="/task/add">Nova Tarefa</RouterLink>
                </div>
            </div>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Data de criação</th>
                        <th>Situação</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody v-for="item in taskCollection" :key="item.id">
                    <tr>
                        <td>{{ item.Title }}</td>
                        <td>{{ item.Description }}</td>
                        <td>{{ item.DateCreated }}</td>
                        <td>{{ item.Status }}</td>
                        <td>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<style></style>