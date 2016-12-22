@extends('layouts.admin.default')

@section('content')
    <div class="content">
        <div class="container-default">
            <!-- Start Page Header -->
            <div class="page-header">
                <h1 class="title">Data Tables</h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">Data Tables</li>
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

                <div class="col-lg-8 col-md-6 titles">
                    <span class="icon color10-bg"><i class="fa fa-table"></i></span>
                    <h1>Data Tables</h1>
                    <h4>Highly flexible tool, based upon the foundations of progressive enhancement<br> and will add advanced interaction controls to any HTML table.</h4>
                </div>

                <div class="col-lg-4 col-md-6">
                    <ul class="list-unstyled list">
                        <li><i class="fa fa-check"></i>Easy to Use<li>
                        <li><i class="fa fa-check"></i>Group Options<li>
                        <li><i class="fa fa-check"></i><a href="http://www.datatables.net/" target="_blank">DataTables</a><li>
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

                        <table id="" class="table display">
                            <thead>
                            <tr>
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
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->isbn }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->content }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->status }}</td>
                                    <td>{{ $product->created_at }}</td>
                                    <td>{{ $product->updated_at }}</td>
                                    <td>

                                            <a type="" class="btn btn-danger btn-icon"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            <a type="" class="btn btn-warning btn-icon"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>

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
