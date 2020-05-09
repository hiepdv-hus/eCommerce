
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue.
 */

require('./bootstrap');

import Vue from 'vue';
import store from './store';
import Helper from './libs/helper';
import Api from './libs/api';
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
Vue.component('home', () => import('./views/home/index'));


const app = new Vue({
    el: '#app',
    store,
    mounted() {
        Pace.start();
    }
});
