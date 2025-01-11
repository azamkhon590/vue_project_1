import { createRouter, createWebHistory } from 'vue-router';
import NewsListView from '@/views/NewsListView.vue';
import NewsSingleView from '@/views/NewsSingleView.vue';
import MainPageView from '@/views/MainPageView.vue';
import InfoPageView from '@/views/InfoPageView.vue';
import ContactPageView from '@/views/ContactPageView.vue';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/news',
      name: 'news_list',
      component: NewsListView
    },
    {
      path: '/news/:id',
      name: 'news_single',
      component: NewsSingleView
    },
    {
      path: '/info',
      name: 'information',
      component: InfoPageView
    },
    {
      path: '/contact',
      name: 'contact',
      component: ContactPageView
    },
    {
      path: '/',
      name: 'main',
      component: MainPageView
    }
  ]
})

export default router
