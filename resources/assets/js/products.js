require('./bootstrap');

var Vue = require('vue');

Vue.use(require('vue-resource'));
//Vue.config.silent = true
import  status from  './components/Status.vue';
import  edit from  './components/Edit.vue';

let vm = new Vue({
    el: '#app',
    components: { status , edit },
    data: {
        id :   0
    },
    mounted ()  {
        console.log('vue mounted')
    },
    methods: {
        edit(id){
            this.id = id
        }
    }

});


$(document).ready(function() {
    $.contextMenu({
        selector: '.context-menu-one',
        callback: function(key, options) {
            var m = "clicked: " + key;
             var id =$(this).data('id')

            switch (key) {
                case 'edit':
                    vm.edit(id)
                    break;
                case 'published':
                    console.log('published');
                    break;
                case 'not_published':
                   console.log('not_published');
                    break;
                case 'delete':

                    break;
                default:

                    break;
            }
            console.log(options);
        },
        items: {
            "edit"    : {name: "Edit", icon: "fa-edit"},
            "published"  : {name: "Published", icon: "fa-level-up"},
            "not_published"  : {name: " Not Published", icon: "fa-level-down"},
            "delete"  : {name: "Delete", icon: "fa-trash"}
        }
    });
    $('.context-menu-one').on('click', function(e){
        console.log('clicked', this);
    });



} );