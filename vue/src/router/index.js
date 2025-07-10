import { createRouter, createWebHistory } from 'vue-router';
import NewsListView from '@/views/NewsListView.vue';
import NewsSingleView from '@/views/NewsSingleView.vue';
import MainPageView from '@/views/MainPageView.vue';
import InfoPageView from '@/views/InfoPageView.vue';
<<<<<<< HEAD
=======
import ContactPageView from '@/views/ContactPageView.vue';
>>>>>>> bdb391a71f42818524171989696975370435a2ba

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
      path: '/about',
      name: 'about',
      component: InfoPageView
    },
    {
<<<<<<< HEAD
=======
      path: '/contact',
      name: 'contact',
      component: ContactPageView
    },
    {
>>>>>>> bdb391a71f42818524171989696975370435a2ba
      path: '/',
      name: 'main',
      component: MainPageView
    }
  ]
})

export default router
