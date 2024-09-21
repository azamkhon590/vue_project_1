import { createRouter, createWebHistory } from 'vue-router';
import NewsListView from '@/views/NewsListView.vue';
import NewsSingleView from '@/views/NewsSingleView.vue';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'news_list',
      component: NewsListView
    },
    {
      path: '/single',
      name: 'news_single',
      component: NewsSingleView
    }
  ]
})

export default router
