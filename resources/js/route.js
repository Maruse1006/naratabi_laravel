import Router from 'vue-router'
import Home from './view/Home.vue'

export default new Router({
  mode:'history',
  routes:[
    {
      path:'/'
      name:'home',
      component:Home
    },
  ]
});
