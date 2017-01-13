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
        var data
        this.$http.get('products/showAll').then((response) => {
            data = response.data
            var grid = webix.ui({
                container:"box1",
                view:"datatable",
                columns:[
                    { id:"ch1", header:{ content:"masterCheckbox" }, checkValue:'on', uncheckValue:'off',   template:"{common.checkbox()}", width:40, css:"rank"},
                    { id:"id",   header:"id",   adjust:"all", sort:"int"},
                    { id:"isbn",    header:[ "isbn",{content:"textFilter"}] ,adjust:"all" ,sort:"string"},
                    { id:"name",    header:[ "name",{content:"textFilter"}] , adjust:"all" ,sort:"string"},
                    { id:"quantity",    header:[ "quantity",{content:"textFilter"}] , adjust:"all",sort:"string"},
                    { id:"price",    header:[ "price",{content:"textFilter"}] , adjust:"all",sort:"string",sort:"string"},
                    { id:"category",    header:[ "category",{content:"selectFilter"}] , adjust:"all",sort:"string",sort:"string"},
                    { id:"status",    header:[ "status",{content:"selectFilter"}] , adjust:"all",sort:"string",sort:"string"},
                    { id:"url",    header:[ "url",{content:"textFilter"}] , adjust:"all",sort:"string",sort:"string"},
                    { id:"content",    header:"content" , adjust:"all" ,sort:"string",sort:"string"},
                    { id:"created_at",    header:"Created Date" , adjust:"all",sort:"string"},
                    { id:"updated_at",    header:"Created Date" , adjust:"all",sort:"string"},
                    {id:"book", header:"Actions", css:"webix_el_button", width:100, template:"<a href='javascript:void(0)' class='check_flight'>Book now</a>"}
                ],
                select:"cell",
                blockselect:true,
                multiselect:true,

                rightSplit:2,
                leftSplit:1,
                autoheight:true,
                data : data,
                pager:{
                    template:"{common.first()} {common.prev()} {common.pages()} {common.next()} {common.last()}",
                    container:"paging_here1",
                    size:10,
                    group:5
                },
                resizeColumn:true,
                resizeRow:true,
                select:"row"

            });
           /*webix.ui({
                view:"contextmenu",
                id:"my_menu",
                data:[
                    "Add",
                    "Rename",
                    "Delete",
                    { $template:"Separator" }
                    ,"Info"
                ],
                master:"box1" //  ID of a DIV container
            });
        }, (response) => {
            console.log('Error', response)
        });*/

    }, (response) => {
            console.log('Error', response)
    });
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



} );

let vm1;
vm1 = new Vue({
    el: '#app1',
    components: {},
    data: {

    },
    mounted ()  {
        console.log('vue mouhgggggggggnted')
        var data
        this.$http.get('users/show').then((response) => {
           data = response.data
            var grid = new webix.ui({
                container:"box",
                view:"datatable",
                columns:[
                    { id:"id",   header:"id",   adjust:"all", sort:"int"},
                    { id:"role",    header:[ "role",{content:"selectFilter"}] ,adjust:"all" ,sort:"string"},
                    { id:"name",    header:[ "pseudo",{content:"selectFilter"}] , adjust:"all" ,sort:"string"},
                    { id:"first_name",    header:"first name" , adjust:"all" ,sort:"string",sort:"string"},
                    { id:"last_name",    header:"Last name" , adjust:"all",sort:"string"},
                    { id:"email",    header:[ "email",{content:"textFilter"}] , adjust:"all",sort:"string",sort:"string"},
                    { id:"created_at",    header:"Created Date" , adjust:"all",sort:"string"}
                ],
                data : data,
                autoheight:true,
                autowidth:true,
                resizeColumn:true,
                resizeRow:true,
                pager:{
                    template:"{common.prev()} {common.pages()} {common.next()}",
                    container:"paging_here",
                    size:100,
                    group:5
                }

            });
            webix.ui({
                view:"contextmenu",
                id:"my_menu",
                data:[
                    "Add",
                    "Rename",
                    "Delete",
                    { $template:"Separator" }
                    ,"Info"
                ],
                master:"box" //  ID of a DIV container
            });
        }, (response) => {
            console.log('Error', response)
        });


    },
    methods: {

    }

});


