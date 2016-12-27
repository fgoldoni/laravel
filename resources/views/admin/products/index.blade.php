@extends('layouts.admin.default')

@section('content')
    <div id ="app" class="content">
        <div class="container-default">
            <!-- Start Page Header -->
            <div class="page-header">

                <h1 class="title">Data Tables</h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Dashboard</a></li>
                    <li class="active">Products</li>
                </ol>

                <!-- Start Page Header Right Div -->
                <div class="right">
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="index.html" class="btn btn-light">Dashboard</a>
                        <a href="#" class="btn btn-light"><i class="fa fa-refresh"></i></a>
                        <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
                        <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a>
                    </div>
                </div>
                <!-- End Page Header Right Div -->

            </div>
            <!-- End Page Header -->

            <!-- Start Presentation -->
            <div class="row presentation">
                <!--<div class="loader" v-if="loader"><img src='img/loading.gif'  alt="loading-img"></div>-->
               <edit :id="id" ></edit>

               <div class="col-lg-8 col-md-6 titles">
                   <span class="icon color10-bg"><i class="fa fa-table"></i></span>
                   <h1>Products Management</h1>
               </div>

               <div class="col-lg-4 col-md-6">
                   <ul class="list-unstyled list">
                       <li><i class="fa fa-check"></i>View<li>
                       <li><i class="fa fa-check"></i>Create<li>
                       <li><i class="fa fa-check"></i>Edit<li>
                   </ul>
               </div>

           </div>
           <!-- End Presentation -->
            <div class="container-padding">

        <!-- Start Row -->
        <div class="row">
            <!-- Start Panel -->



                        <table id="example" class="display data nowrap table-bordered" cellspacing="0" width="100%">
                            <thead class="">
                            <tr>
                                <th class=""><input type="checkbox"></th>
                                <th>id</th>
                                <th>isbn</th>
                                <th>name</th>
                                <th>quantity</th>
                                <th>price</th>
                                <th>Categories</th>
                                <th>Status</th>
                                <th>Content</th>
                                <th>created</th>
                                <th>modified</th>
                                <th>actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(json_decode($products) as $product)
                                <tr>
                                    <td class="context-menu-one " data-id="{{ $product->id }}"><input type="checkbox"></td>
                                    <td class="context-menu-one" data-id="{{ $product->id }}">{{ $product->id }}</td>
                                    <td class="context-menu-one" data-id="{{ $product->id }}">{{ $product->isbn }}</td>
                                    <td class="context-menu-one" data-id="{{ $product->id }}">{{ $product->name }}</td>
                                    <td class="context-menu-one" data-id="{{ $product->id }}">{{ $product->quantity }}</td>
                                    <td class="context-menu-one" data-id="{{ $product->id }}">{{ $product->price }}</td>
                                    <td class="context-menu-one" data-id="{{ $product->id }}">{{ $categories[$product->category]['name'] }}</td>
                                    <td class="context-menu-one text-left" data-id="{{ $product->id }}"> <status message="{{ $status[$product->status]['name'] }}" ></status></td>
                                    <td class="context-menu-one" data-id="{{ $product->id }}">{{ $product->content }}</td>
                                    <td class="context-menu-one" data-id="{{ $product->id }}">{{ $product->created_at }}</td>
                                    <td class="context-menu-one text-left" data-id="{{ $product->id }}">{{ $product->updated_at }}</td>
                                    <td>
                                        <a class="text-warning btn-icon"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                        <a class="text-danger btn-icon"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>





            <!-- End Panel -->






        </div>
        <!-- End Row -->






    </div>
        </div>
    </div>
@endsection
