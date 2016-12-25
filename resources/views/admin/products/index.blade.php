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
                <div class="loader" v-if="loader"><img src='img/loading.gif'  alt="loading-img"></div>
                <edit  :product="product" :categories="categories" :status="status" :loader="loader" ></edit>

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
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-title">
                        DAtaTables
                    </div>
                    <div class="panel-body table-responsive">

                        <table id="" class="table display data table-bordered ">
                            <thead class="">
                            <tr>
                                <th class=""><input type="checkbox"></th>
                                <th>id</th>
                                <th>isbn</th>
                                <th>name</th>
                                <th>Content</th>
                                <th>quantity</th>
                                <th>price</th>
                                <th>category</th>
                                <th>status</th>
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
                                    <td class="context-menu-one" data-id="{{ $product->id }}">{{ $product->content }}</td>
                                    <td class="context-menu-one" data-id="{{ $product->id }}">{{ $product->quantity }}</td>
                                    <td class="context-menu-one" data-id="{{ $product->id }}">{{ $product->price }}</td>
                                    <td class="context-menu-one text-st" data-id="{{ $product->id }}">{{ $product->category->name }}</td>
                                    <td class="context-menu-one text-left" data-id="{{ $product->id }}"> <status :message="{{ $product->status }}" ></status></td>
                                    <td class="context-menu-one" data-id="{{ $product->id }}">{{ $product->created_at }}</td>
                                    <td class="context-menu-one text-left" data-id="{{ $product->id }}">{{ $product->updated_at }}</td>
                                    <td>
                                        <a class="btn btn-warning btn-icon"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                        <a class="btn btn-danger btn-icon"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>

                </div>
            </div>
            <!-- End Panel -->






        </div>
        <!-- End Row -->






    </div>
        </div>
    </div>
@endsection
