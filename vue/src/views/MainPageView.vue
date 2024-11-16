<script setup>
import { ref } from 'vue';
import TeacherData from '@/assets/mocData/TeacherData.json';
import NewsData from '@/assets/mocData/NewsData.json';

let teachers = ref(TeacherData);
let news = ref(NewsData);

</script>

<template>
    <div class="content">
        <div class="logo text-center">
            <h1>School</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, quidem!</p>
        </div>
        <div class="img">
            <img class="image" src="./../assets/Photo/university.jpg">
        </div>
        <div class="news-block">
            <h2 class="text-center">News</h2>
            <div class="row" v-for="(news, index) in NewsData">
                <div class="news-first" v-if="index === 0">
                    <span>-></span>
                    <div class="col-12">
                        <img class="w-100" src="https://placehold.co/600x200" alt="j">
                    </div>
                    <p>
                        {{ news.content }}
                    </p>
                </div>

            </div>
        </div>
        <h2 class="text-center">Teachers</h2>
        <div class="row">
            <div class="col-md-3 mb-4" v-for="teach in TeacherData" :key="teach">
                <div class="card m-2">
                    <img src="https://placehold.co/100x100" class="card-img-top" alt=":D">
                    <div class="card-body">
                        <h5 class="card-title">{{ teach.name }}</h5>
                        <p class="card-text">Age:{{ teach.age }}</p>
                        <p class="card-text">{{ teach.content }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
span{
    position: absolute;
    left: 1000px;
    color: white;
    background-color: blue;
    height: 60px;
    width: 60px;
    border-radius: 50%;
}
.teachers {
    padding: 10px 0;
    display: flex;
    justify-content: space-between;
}
.news-block{
    position: relative;
}
.image {
    width: 100%;
    height: 50%;
    border-radius: 3px;
    position: relative;
}

.logo {
    color: white;
    position: absolute;
    z-index: 5;
    top: 250px;
    left: 190px;
    background: rgba(158, 142, 142, 0);
}

p {

    font-size: 20px;
}
</style>