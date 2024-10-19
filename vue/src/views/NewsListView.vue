<script setup>
    import { ref } from 'vue';
    import NewsData from '@/assets/mocData/NewsData.json'

    const newsList = ref(NewsData);
</script>

<template>
    <div class="row">
        <div class="col-md-3 mb-4" v-for="news in newsList" :key="news">
            <div class="card m-2">
                <img src="https://placehold.co/600x400" class="card-img-top" alt=":D">
                <div class="card-body">
                    <h5 class="card-title">{{ news.name }}</h5>
                    <p class="card-text">{{ news.short_content }}</p>
                    <p class="card-text link-danger">{{ news.date }}</p>
                    <router-link class="btn btn-primary" :to="{name: 'news_single', params: {id: news.id}}">Подробнее</router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped></style>