<script setup>
import { onMounted, ref } from 'vue';
import { useRoute } from 'vue-router';

const news = ref({
    id: null,
    name: null,
    short_content: null,
    content: null,
    image_url: null,
    date: null
});
const route = useRoute();
onMounted(async () => {
    try {
        const response = await fetch("/src/assets/mocData/NewsData.json");
        const data = await response.json();
        news.value = data.find((el) => el.id === parseInt(route.params.id));
        console.log(news);
    } catch (error) {
        console.error("error", error);
    }
})
</script>

<template>
    <div class="container-fluid">
        <div class="row">
            <span>{{ news.date }}</span>
            <h1 class="text-center">{{ news.name }}</h1>
            <div class="col-12">
                <img class="w-100" src="https://placehold.co/600x200" alt="">
            </div>
            <p>
                {{ news.content }}
            </p>
        </div>
    </div>

</template>

<style scoped></style>