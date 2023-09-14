import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import authService from '@/services/auth.service'
import httpClient from "@/services/http.service"

const routes = [
  {
    path: '/',
    name: 'home',
    component: () => import('../layouts/DefaultLayout.vue'),
    children: [
      {
        path: 'home',
        name: 'home',
        component: HomeView,
      },
      {
        path: '/education-program',
        name: 'education-program',
        component: () => import('../views/EducationProgram.vue')
      },
      {
        path: '/education-discipline',
        name: 'education-discipline',
        component: () => import('../views/EducationDiscipline.vue')
      },
      {
        path: '/formation-education-program',
        name: 'formation-education-program',
        component: () => import('@/views/FormationEducationProgram.vue')
      },

    ]
  },

  {
    path: '/auth',
    name: 'Auth',
    component: () => import('@/layouts/AuthLayout.vue'),
    children: [
      {
        path: 'login',
        name: 'login',
        component: () => import('@/views/Login.vue'),
      },
    ]
  },

]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

const pagesWithoutAuthorization = ['login', 'register']
router.beforeEach(async (to) => {

  if (pagesWithoutAuthorization.includes(to.name)) {
    return true
  }

  if (!authService.isLoggedIn()) {
    let query = {}
    return {name: 'login', query: query}
  }



})


export default router
