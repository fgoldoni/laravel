<template>
    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Large Modal</h4>
                </div>

                <div class="modal-body">
                    <div class="row">
                    </div>
                    <!-- Start Row -->
                    <div class="row">
                        <!-- End Searchbox -->
                        <!-- Start Row -->
                        <div class="col-md-12 col-lg-4 padding-0">
                            <!-- Start Panel -->
                            <div class="col-md-12">
                                <!-- Start Browser Stats -->
                                <!-- Start Browser Stats -->
                                <div class="panel panel-widget">
                                    <div class="panel-title">
                                        Browser Stats
                                        <ul class="panel-tools panel-tools-hover">
                                            <li><a class="icon"><i class="fa fa-refresh"></i></a></li>
                                            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                                            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body">
                                        <input type="text" class="form-control" placeholder="Search ...">
                                        <ul class="basic-list">

                                            <li v-for="product in products" @click="edit(product.id)"
                                                class="sortable">{{ product.id +"/"+ product.name }}
                                                <span class="right label " :class="label(product.status)">{{ product.quantity }}</span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- End Browser Stats -->
                            </div>
                            <!-- End Panel -->
                        </div>
                        <!-- End Row -->
                        <!-- Start Tab Panel -->
                        <div class="col-md-12 col-lg-8 padding-0">
                            <div class="col-md-12">
                                <div class="panel panel-widget">
                                    <div class="panel-title">
                                        Browser Stats
                                        <ul class="panel-tools panel-tools-hover">
                                            <li><a class="icon"><i class="fa fa-refresh"></i></a></li>
                                            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                                            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs font-title-tab" role="tablist">
                                                <li role="presentation" class="active"><a href="#home9" aria-controls="home9" role="tab" data-toggle="tab">Main</a></li>
                                                <li role="presentation"><a href="#profile9" aria-controls="profile9" role="tab" data-toggle="tab">Image</a></li>
                                                <li role="presentation"><a href="#messages9" aria-controls="messages9" role="tab" data-toggle="tab">Meta</a></li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active clearfix" id="home9">
                                                    <div class="col-md-12 ">
                                                        <div class="panel panel-transparent">
                                                            <div class="panel-title">
                                                                Textboxes
                                                            </div>
                                                            <div class="panel-body">
                                                                <div class="form-horizontal">
                                                                    <div class="form-group">
                                                                        <label for="id" class="col-sm-2 control-label form-label">id</label>
                                                                        <div class="col-sm-10">
                                                                            <label class="sr-only" for="id">id</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
                                                                                <input :value ="product.id" v-model="product.id" type="text" class="form-control" id="id" name="id" placeholder="id" disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="created_at" class="col-sm-2 control-label form-label">created</label>
                                                                        <div class="col-sm-10">
                                                                            <label class="sr-only" for="created_at">created</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                                                                <input :value ="product.created_at" v-model ="product.created_at" type="text" class="form-control" id="created_at" name="created_at" placeholder="created" disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="isbn" class="col-sm-2 control-label form-label">isbn</label>
                                                                        <div class="col-sm-10">
                                                                            <label class="sr-only" for="isbn">isbn</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                                                                <input :value ="product.isbn" v-model ="product.isbn" type="text" class="form-control" id="isbn" name="isbn" placeholder="isbn">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="name" class="col-sm-2 control-label form-label">name</label>
                                                                        <div class="col-sm-10">
                                                                            <label class="sr-only" for="name">name</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                                                                <input :value ="product.name" v-model ="product.name" type="text" class="form-control" id="name" name="name" placeholder="name">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="quantity" class="col-sm-2 control-label form-label">quantity</label>
                                                                        <div class="col-sm-10">
                                                                            <label class="sr-only" for="quantity">quantity</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                                                                <input :value ="product.quantity" v-model ="product.quantity" type="text" class="form-control" id="quantity" name="quantity" placeholder="quantity">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="price" class="col-sm-2 control-label form-label">price</label>
                                                                        <div class="col-sm-10">
                                                                            <label class="sr-only" for="price">price</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                                                                <input :value ="product.price" v-model ="product.price" type="text" class="form-control" id="price" name="price" placeholder="price">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label form-label">category</label>
                                                                        <div class="col-sm-10" >
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                                                                <select class="col-sm-12" id="category" name="category" v-model="select_category">
                                                                                    <option  v-for="category in categories" :value="category.id">{{ category.name }}</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label form-label">status</label>
                                                                        <div class="col-sm-10" >
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                                                                <select class="col-sm-12" id="status" name="status" v-model="select_status">
                                                                                    <option v-for="item in status" :value="item.id">{{ item.name }}</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label form-label">Full description</label>
                                                                        <div class="col-sm-10">
                                                                            <textarea  :value ="product.content" v-model ="product.content" class="form-control" rows="6" id="content" name="content" placeholder="Type your message..."></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label form-label" for="stock"></label>
                                                                        <div class="col-sm-10">
                                                                            <div class="checkbox checkbox-primary">
                                                                                <input id="stock" name="stock" type="checkbox" checked>
                                                                                <label for="stock">In Stock</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="profile9">
                                                    <!-- Start Row -->
                                                    <div class="row">
                                                        <!-- Start Panel -->
                                                        <div class="col-md-12">
                                                            <!-- Start Files -->
                                                            <div class="panel panel-widget" style="height:450px;">
                                                                <div class="panel-title">
                                                                    My Files <span class="label label-danger">{{ media_length }}</span>

                                                                    <ul class="panel-tools">
                                                                        <li ><input type="file" class="form-control" id="input001"></li>
                                                                        <li ><input type="submit"></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="panel-body">

                                                                    <table class="table table-dic table-hover ">
                                                                        <thead >
                                                                        <tr>
                                                                            <th class=""><input type="checkbox"></th>
                                                                            <th>media</th>
                                                                            <th>title</th>
                                                                            <th>status</th>
                                                                            <th>size</th>
                                                                            <th class="text-r">Actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr id=" media" v-for="media in medias">
                                                                            <td :data-id="media.id"><input type="checkbox"></td>
                                                                            <td><img :src="media.url" alt="img" class="img"></td>
                                                                            <td>{{ media.name }}</td>
                                                                            <td>{{ media.status }}</td>
                                                                            <td class="text-r">{{ media.size }}</td>
                                                                            <td class="text-r">
                                                                                <a class="btn-sm link"  @click="renameMedia(media)"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                                                <a class="btn-sm link" @click="destroyMedia(media)"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>

                                                                </div>
                                                            </div>
                                                            <!-- End Files -->

                                                        </div>
                                                        <!-- End Panel -->
                                                    </div>
                                                    <!-- End Row -->
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="messages9">
                                                    <div class="col-md-12 ">
                                                        <div class="panel panel-transparent">
                                                            <div class="panel-title">
                                                                Metaboxes
                                                            </div>
                                                            <div class="panel-body">
                                                                <div class="form-horizontal">
                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label form-label">Meta Keywords</label>
                                                                        <div class="col-sm-5">
                                                                            <select :id='multiselect_id' multiple='multiple'>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <div class="col-sm-10">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                                                                    <input type="text" v-model="add_meta" class="form-control" id="meta" name="meta" placeholder="Meta" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-sm-2">
                                                                                <button @click="addMeta(add_meta)" type="button" class="btn btn-default">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- End Tab Panel -->

                    </div>
                    <!-- End Row -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" @click="save(product)">Save</button>
                    <button type="button" class="btn btn-danger" @click="destroy(product)">Delete</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        props: ['id'],
        data(){
            return{
                products: [],
                product : [],
                multi_select_items : [],
                add_meta: '',
                categories : [],
                status : [],
                medias : [],
                meta : [],
                select_category : 0,
                select_status : 0,
                media_length: 0,
                multiselect_id: 'callbacks'
            }
        },
        mounted() {
            this.$http.get('products/show').then((response) => {
                this.products = response.data
            }, (response) => {
                console.log('Error',response)
            });
        },
        methods: {
            type(value){
                if(value == 1){
                    return 'radio-success'
                }else if(value == 2){
                        return 'radio-warning'
                }else if(value == 3){
                     return 'radio-danger'
                }

            },
            label(value){
                 if(value == 1){
                    return 'label-success'
                }else if(value == 2){
                        return 'label-warning'
                }else if(value == 3){
                     return 'label-danger'
                }
            },
            edit(id){
                 //this.loader = true;
                 this.$http.get('products/edit/'+id).then((response) => {
                    var metas = []
                    var my_metas = []
                    this.product = response.data.product
                    this.categories = response.data.selectCategories
                    this.status = response.data.status
                    this.medias = response.data.product.medias
                    this.meta = response.data.metas
                    this.media_length = this.medias.length
                    this.select_category = response.data.product.category
                    this.select_status = response.data.product.status
                    $.each(this.meta, function(key, value) {
                        metas[value.id] = (value.tag)
                    });
                    $.each(response.data.product.metas, function(key, value) {
                        my_metas.push(''+value.id)
                    });
                    for (var meta in metas) {
                      $('#' + this.multiselect_id).multiSelect('addOption', { value: meta, text: metas[meta] });
                    }
                    $('#' + this.multiselect_id).multiSelect('select', my_metas);
                    this.multi_select_items = my_metas
                }, (response) => {
                    console.log('Error',response)
                }).then( function () {
                    //this.loader = false
                })
                $('#edit_modal').modal('show')

            },
            test(id){
               console.log('testss'+id)
            },
            save(product){
               var items = $('#callbacks option:selected');
               var selected = [];
               $(items).each(function(index, brand){
                    selected.push($(this).val());
               });
               var url
               if(selected.length > 0){
                    url = 'products/save/'+product.id+'/'+selected
               }else{
                    url = 'products/save/'+product.id
               }
               this.$http.post( url ,{
                   isbn    : product.isbn,
                   name    : product.name,
                   content : product.content,
                   quantity : product.quantity,
                   price   : product.price,
                   category: this.select_category,
                   status  : this.select_status,
               }).then((response) => {
                console.log('Success',response)
                    location.reload(true)
              }, (response) => {
                console.log('Error',response)
              });
            },
            destroy(product){
                this.$http.delete('products/destroy/'+product.id,{
                   isbn    : product.isbn,
                   name    : product.name,
                   content : product.content,
                   quantity : product.quantity,
                   price   : product.price,
                   category: this.select_category,
                   status  : this.select_status
               }).then((response) => {
                console.log('Success',response)
                //location.reload(true)
              }, (response) => {
                console.log('Error',response)
              });
            },
            destroyMedia(media){
                this.$http.delete('products/destroy/'+this.id+'/'+media.id).then((response) => {
                this.media_length--;
                $( ".table-dic tbody tr" ).find( "td[data-id="+response.data.medias+"]" ).parent().slideUp()
                console.log('Success',response)
                //location.reload(true)
              }, (response) => {
                console.log('Error',response)
              });
            },
            addMeta(add_meta){
                 this.$http.post( 'products/saveMeta/'+add_meta ).then((response) => {
                    console.log('Success',response)
                    $('#callbacks').multiSelect('addOption', { value: response.data.id, text: add_meta, index: 0 })
                    $('#callbacks').multiSelect('refresh');
                    this.add_meta = ''
                    console.log('Success',add_meta)
                    //location.reload(true)
                 }, (response) => {
                    console.log('Error',response)
                 });
            }
        },
        watch:{
          id(value){
             this.edit(value)
          }
        },

    }
</script>
