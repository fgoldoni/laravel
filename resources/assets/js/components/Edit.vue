<template>

    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Large Modal</h4>
                </div>
                <div class="modal-body">
                    <form action="">
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
                                <div class="panel panel-widget">
                                    <div class="panel-title">
                                        Browser Stats
                                        <!-- Start Searchbox -->
                                        <ul class="panel-tools">
                                            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                                            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                                            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body basic-list">
                                        <div>
                                            <form class="search">
                                                <input type="text" class="form-control" placeholder="Search ...">
                                            </form>
                                        </div>
                                        <ul >
                                            <div class="fixed-list">
                                                <li v-for="product in products" >
                                                    <div @click="edit(product.id)" class="radio" :class="type(product.status)">
                                                        <input type="radio"  id="radio4" value="option2" checked>
                                                        <label  >
                                                            {{ product.id +"/"+ product.isbn +"/"+ product.name }}
                                                        </label>
                                                        <span class="right label " :class="label(product.status)"> 16.9%</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio radio-success">
                                                        <input type="radio"  id="radio4" value="option2" checked>
                                                        <label >
                                                            Safari
                                                        </label>
                                                        <span class="right label label-success">15.5%</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio radio-warning">
                                                        <input type="radio"  id="radio4" value="option2" checked>
                                                        <label >
                                                            Opera
                                                        </label>
                                                        <span class="right label label-warning">15.5%</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio radio-warning">
                                                        <input type="radio"  id="radio4" value="option2" checked>
                                                        <label >
                                                            Internet Explorer
                                                        </label>
                                                        <span class="right label label-warning">15.5%</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio radio-success">
                                                        <input type="radio"  id="radio4" value="option2" checked>
                                                        <label >
                                                            Mobile
                                                        </label>
                                                        <span class="right label label-success">15.5%</span>
                                                    </div>
                                                </li>
                                            </div>
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
                                <div class="panel panel-transparent">
                                    <div class="panel-title">
                                        Textboxes
                                        <ul class="panel-tools">
                                            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                                            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                                            <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
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
                                                                                <input :value ="product.id" type="text" class="form-control" id="id" name="id" placeholder="id" disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="created_at" class="col-sm-2 control-label form-label">created</label>
                                                                        <div class="col-sm-10">
                                                                            <label class="sr-only" for="created_at">created</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                                                                <input :value ="product.created_at" type="text" class="form-control" id="created_at" name="created_at" placeholder="created" disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="isbn" class="col-sm-2 control-label form-label">isbn</label>
                                                                        <div class="col-sm-10">
                                                                            <label class="sr-only" for="isbn">isbn</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                                                                <input :value ="product.isbn" type="text" class="form-control" id="isbn" name="isbn" placeholder="isbn">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="name" class="col-sm-2 control-label form-label">name</label>
                                                                        <div class="col-sm-10">
                                                                            <label class="sr-only" for="name">name</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                                                                <input :value ="product.name" type="text" class="form-control" id="name" name="name" placeholder="name">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="quantity" class="col-sm-2 control-label form-label">quantity</label>
                                                                        <div class="col-sm-10">
                                                                            <label class="sr-only" for="quantity">quantity</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                                                                <input :value ="product.quantity" type="text" class="form-control" id="quantity" name="quantity" placeholder="quantity">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="price" class="col-sm-2 control-label form-label">price</label>
                                                                        <div class="col-sm-10">
                                                                            <label class="sr-only" for="price">price</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                                                                <input :value ="product.price" type="text" class="form-control" id="price" name="price" placeholder="price">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label form-label">category</label>
                                                                        <div class="col-sm-10" >
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                                                                <select class="col-sm-12" id="category" name="category">
                                                                                    <option  v-for="category in categories">{{ category.name }}</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label form-label">status</label>
                                                                        <div class="col-sm-10" >
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                                                                <select class="col-sm-12" id="status" name="status.status">
                                                                                    <option v-for="item in status">{{ item.status }}</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label form-label">Full description</label>
                                                                        <div class="col-sm-10">
                                                                            <textarea  :value ="product.content" class="form-control" rows="6" id="content" name="content" placeholder="Type your message..."></textarea>
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
                                                                    My Files <span class="label label-danger">29</span>
                                                                </div>
                                                                <div class="panel-body">

                                                                    <table class="table table-dic table-hover ">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td><i class="fa fa-folder-o"></i>Projects</td>
                                                                            <td>Folder</td>
                                                                            <td class="text-r">27/2/2015 12:34 AM</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class="fa fa-file-archive-o"></i>27 March Backup</td>
                                                                            <td>Zip</td>
                                                                            <td class="text-r">27/2/2015 12:34 AM</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class="fa fa-file-code-o"></i>Kode Front-End Theme</td>
                                                                            <td>Html</td>
                                                                            <td class="text-r">27/2/2015 12:34 AM</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class="fa fa-file-pdf-o"></i>Documents</td>
                                                                            <td>Pdf</td>
                                                                            <td class="text-r">27/2/2015 12:34 AM</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class="fa fa-folder-o"></i>Themes</td>
                                                                            <td>Folder</td>
                                                                            <td class="text-r">27/2/2015 12:34 AM</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class="fa fa-folder-o"></i>Uploaded Files</td>
                                                                            <td>Folder</td>
                                                                            <td class="text-r">27/2/2015 12:34 AM</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3"><i class="fa fa-plus" aria-hidden="true"></i>Add Files</td>
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
                                                                        <label for="id" class="col-sm-2 control-label form-label">id</label>
                                                                        <div class="col-sm-10">
                                                                            <label class="sr-only" for="id">id</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                                                                <input type="text" class="form-control" id="id" name="id" placeholder="id" disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="created_at" class="col-sm-2 control-label form-label">created</label>
                                                                        <div class="col-sm-10">
                                                                            <label class="sr-only" for="created_at">created</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-pencil-square-o"></i></div>
                                                                                <input type="text" class="form-control" id="created_at" name="created_at" placeholder="created" disabled>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label form-label">Meta Keywords</label>
                                                                        <div class="col-sm-10">
                                                                            <textarea class="form-control" rows="6" id="content" name="content" placeholder="Meta Keywords..."></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-sm-2 control-label form-label">Meta description</label>
                                                                        <div class="col-sm-10">
                                                                            <textarea class="form-control" rows="6" id="content" name="content" placeholder="Type your message..."></textarea>
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default">Save changes</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['product' , 'categories', 'status' ,'loader'],
        data(){
            return{
                products: [],
            }
        },
        mounted() {
            this.$http.get('products/show').then((response) => {
                this.Pub='uuu'
                this.products = response.data
            }, (response) => {
                console.log('Error',response)
            });
        },
        methods: {
            type(value){
                if(value == 'Pub'){
                    return 'radio-success'
                }else if(value == 'Del'){
                        return 'radio-danger'
                }else if(value == 'Not'){
                     return 'radio-warning'
                }

            },
            label(value){
                 if(value == 'Pub'){
                    return 'label-success'
                }else if(value == 'Del'){
                        return 'label-danger'
                }else if(value == 'Not'){
                     return 'label-warning'
                }
            },
            edit(id){
            this.loader = true
            this.$http.get('products/edit/'+id).then((response) => {
                this.product = response.data.product
                this.categories = response.data.selectCategories
                this.status = response.data.status
            }, (response) => {
                console.log('Error',response)
            }).then( function () {
                this.loader = false
            })

            }
        }
    }
</script>
