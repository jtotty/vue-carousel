
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Tooltip from "tooltip.js";

Vue.component('carousel', require('./components/Carousel.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.directive('tooltip', {
    bind(element, bindings) {
        new Tooltip(element, {
            placement: bindings.arg,
            title: bindings.value
        });;
    }
});

const app = new Vue({
    el: '#app'
});

const tooltips = new Vue({
    el: '#tooltips',

    mounted() {
        document.querySelectorAll('[data-tooltip]').forEach(element => {
            new Tooltip(element, {
                placement: element.dataset.tooltipplacement,
                title: element.dataset.tooltip
            });
        });
    }
});
