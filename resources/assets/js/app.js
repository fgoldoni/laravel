
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

var Vue = require('vue');

Vue.use(require('vue-resource'));
Vue.http.options.root='https://jsonplaceholder.typicode.com'
//Vue.http.headers.common['Authorization'] = 'Basic YXBpOnBhc3N3b3Jk';

import  example from  './components/Example.vue';
import  pagea from  './components/Status.vue';

const app = new Vue({
    el: '#app',
    components: { example , pagea },
    data: {
        message: "Salut les gens",
        link: "goldoni",
        email: "goldoni@yahoo.fr"
    }
});
