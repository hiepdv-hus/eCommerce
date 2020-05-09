
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue.
 */

require('../bootstrap');

import Vue from 'vue';
import store from './store';
import Helper from '../libs/helper';
import Api from '../libs/api';
import VModal from 'vue-js-modal';
import Toasted from 'vue-toasted';
import Pace from 'pace-js';


Vue.use(VModal, { dialog: true });
Vue.use(Toasted);
Vue.use(Helper);
Vue.use(Api);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('auth-login', () => import('./views/auth/login'));
Vue.component('dash-board', () => import('./views/dashboard/index'));

//useradmin
Vue.component('system-user-add', () => import('./views/system-user/add'));
Vue.component('system-user-update', () => import('./views/system-user/update'));
Vue.component('system-user-list', () => import('./views/system-user/list'));
Vue.component('system-user-edit', () => import('./views/system-user/edit'));

//customer
Vue.component('customer-detail', () => import('./views/customer/detail'));
Vue.component('customer-list', () => import('./views/customer/list'));
Vue.component('customer-edit', () => import('./views/customer/edit'));
Vue.component('customer-add', () => import('./views/customer/add'));

//media
Vue.component('media-list', () => import('./views/media/list'));

//article
Vue.component('article-list', () => import('./views/article/list'));
Vue.component('article-add', () => import('./views/article/add'));
Vue.component('article-edit', () => import('./views/article/edit'));

//News
Vue.component('news-list', () => import('./views/news/list'));
Vue.component('news-add', () => import('./views/news/add'));
Vue.component('news-edit', () => import('./views/news/edit'));
Vue.component('news-detail', () => import('./views/news/detail'));

//Event
Vue.component('event-list', () => import('./views/event/list'));
Vue.component('event-add', () => import('./views/event/add'));
Vue.component('event-edit', () => import('./views/event/edit'));

//Category
Vue.component('category-list_news', () => import('./views/category/list_news'));
Vue.component('category-add', () => import('./views/category/add'));

const app = new Vue({
    el: '#app',
    store,
    mounted() {
        Pace.start();
    }
});
