import { createRouter, createWebHistory } from 'vue-router';
import NewsListView from '@/views/NewsListView.vue';
import NewsSingleView from '@/views/NewsSingleView.vue';
import HomePageView from '@/views/HomePageView.vue';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home_page',
      component: HomePageView
    },
    {
      path: '/news',
      name: 'news_list',
      component: NewsListView
    },
    {
      path: '/news/:id',
      name: 'news_single',
      component: NewsSingleView
    }
  ]
})

export default router
