<script setup>
    import { ref } from 'vue';

    const newsList = ref([
        {
            id: 1,
            name: 'News 1',
            short_content: 'info news 1',
            content: 'info news 1',
            image_url: '',
            date: '2024-09-04'
        },
        {
            id: 2,
            name: 'News 2',
            short_content: 'info news 2',
            content: 'info news 2',
            image_url: '',
            date: '2024-09-04'
        },
        {
            id: 3,
            name: 'News 3',
            short_content: 'info news 3',
            content: 'info news 3',
            image_url: '',
            date: '2024-09-04'
        },
        {
            id: 4,
            name: 'News 4',
            short_content: 'info news 4',
            content: 'info news 4',
            image_url: '',
            date: '2024-09-04'
        },
        {
            id: 5,
            name: 'News 5',
            short_content: 'info news 5',
            content: 'info news 5',
            image_url: '',
            date: '2024-09-04'
        },
        {
            id: 6,
            name: 'News 6',
            short_content: 'info news 6',
            content: 'info news 6',
            image_url: '',
            date: '2024-09-04'
        }
    ]);
</script>

<template>
    <div class="row">
        <div class="col-md-3 mb-4" v-for="news in newsList" :key="news">
            <div class="card">
                <img src="https://placehold.co/600x400" class="card-img-top" alt=":D">
                <div class="card-body">
                    <h5 class="card-title">{{ news.name }}</h5>
                    <p class="card-text">{{ news.short_content }}</p>
                    <p class="card-text link-danger">{{ news.date }}</p>
                    <a href="/single" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped></style>