require('./bootstrap');

var Vue = require('vue');

Vue.use(require('vue-resource'));
//Vue.config.silent = true
import  status from  './components/Status.vue';
import  edit from  './components/Edit.vue';
let vm;
vm = new Vue({
    el: '#app',
    components: {status, edit},
    data: {
        id: 0
    },
    mounted ()  {
        console.log('vue mounted')
    },
    methods: {
        edit(id){
            this.id = id
        },
        destroy(id){
            this.$http.delete('products/destroy/' + id).then((response) => {
                console.log('Success', response)
                location.reload(true)
            }, (response) => {
                console.log('Error', response)
            });
        },
        update(id, status){
            this.$http.put('products/update/' + id, {
                status: status
            }).then((response) => {
                console.log('Success', response)
                location.reload(true)
            }, (response) => {
                console.log('Error', response)
            });
        },
        add(){
            console.log('add');
            $('#edit_modal').modal('show')
        },
        refresh(){
            location.reload(true)
        },
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
                    vm.update(id,'1')
                    break;
                case 'not_published':
                    vm.update(id,'2')
                    break;
                case 'delete':
                    vm.destroy(id)
                    break;
                default:

                    break;
            }
            //console.log(options);
        },
        items: {
            "edit"    : {name: "Edit", icon: "fa-edit"},
            "published"  : {name: "Published", icon: "fa-level-up"},
            "not_published"  : {name: " Not Published", icon: "fa-level-down"},
            "delete"  : {name: "Delete", icon: "fa-trash"}
        }
    });
    $('.context-menu-one').on('click', function(e){
        //console.log('clicked', this);
    });
    var tt =function () {
        console.log('tt')
    }
} );



