@extends('layouts.admin.default')


@section('content')
    <div id ="app" class="content">
        <edit :id="id" ></edit>
        @include('admin.products.products_dlgs')
        <!-- Start Page Header -->
        <div class="page-header">
            <h1 class="title">Blank Page</h1>
            <ol class="breadcrumb">
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="#">Extra Pages</a></li>
                <li class="active">Blank Page</li>
            </ol>
            <!-- Start Page Header Right Div -->
            <div class="right">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="index.html" class="btn btn-light">Dashboard</a>
                    <a href="#" class="btn btn-light" @click="add"><i class="fa fa-plus"></i></a>
                    <a href="#" class="btn btn-light" @click="refresh"><i class="fa fa-refresh"></i></a>
                    <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
                    <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a>
                </div>
            </div>
            <!-- End Page Header Right Div -->

        </div>
        <!-- End Page Header -->
        <div class="container-padding">
            <div class="panel-body table-responsive">
                <div id="box1"  :data-id="id" class="table display" >%%Grid%%</div>
                <div id="paging" ></div>
            </div>

            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>

    </div>
@endsection
