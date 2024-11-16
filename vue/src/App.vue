<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
    <Header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">School</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" :to="{ name: 'news_list' }">News</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </Header>
    <section>
        <RouterView />
    </section>

    <footer>
        <hr>
        <div class="footer_nav">
            <div class="nav_item">
                <router-link class="nav-link" :to="{ name: 'news_list' }">News</router-link>
            </div>
            <h2>News</h2>
            <p></p>
        </div>
    </footer>
</template>

<style scoped>
.footer_nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
nav{
    background-color: blueviolet;
}
</style>
