<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const newsList = ref([]);
const categoryList = ref([]);

onMounted(async () => {
    try {
        const response = await axios.get("http://127.0.0.1:8000/api/news");
        newsList.value = response.data.data;

        const category_response = await axios.get("http://127.0.0.1:8000/api/category");
        categoryList.value = category_response.data.data;

        console.log(newsList.value);
    } catch {

    }
});
</script>

<template>
    <div v-for="category in categoryList" :key="category" class="last-group">
        <button type="button" class="list-group-item list-group-item-active">{{ category.title }}</button>
    </div>
    <div class="logo">
        <h1 class="text-center">News</h1>
    </div>
    <div class="searhe">
        <div class="input-group mb-3 p-3">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Searhe">
                <label for="floatingInputGroup1">Searhe</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div v-if="newsList.length <= 0">Empty</div>
        <div class="col-md-3 mb-4" v-for="news in newsList" :key="news">
            <div class="card m-2">
                <img src="https://placehold.co/600x400" class="card-img-top" alt=":D">
                <div class="card-body">
                    <h5 class="card-title">{{ news.title }}</h5>
                    <p class="card-text">{{ news.short_content }}</p>
                    <p class="card-text link-danger">{{ news.date }}</p>
                    <router-link class="btn btn-primary"
                        :to="{ name: 'news_single', params: { id: news.id } }">Подробнее</router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped></style>