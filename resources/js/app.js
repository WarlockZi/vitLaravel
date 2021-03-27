require('./bootstrap');
require('alpinejs');

import Vue from "vue";
import App from './vue/App'

const app = new Vue({
    el: '#app',
    components: {App},
    render : (h) => {return h(App)}
});