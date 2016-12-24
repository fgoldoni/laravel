require('./bootstrap');


var Vue = require('vue');

Vue.use(require('vue-resource'));
Vue.http.options.root='https://jsonplaceholder.typicode.com'
//Vue.http.headers.common['Authorization'] = 'Basic YXBpOnBhc3N3b3Jk';

import  status from  './components/Status.vue';

const app = new Vue({
    el: '#app',
    components: { status },
    data: {
        Pub: "Published",
        Not: 'Not Published ',
        Del: 'Deleted'
    }
});
