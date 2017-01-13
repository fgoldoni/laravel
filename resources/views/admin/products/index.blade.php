@extends('layouts.admin.default')


@section('content')
    <div id ="app" class="content">

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

                    <edit :id="id" ></edit>

            <table  class="display data nowrap table-responsive table-hover" cellspacing="0" width="100%">
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
                        <td class="context-menu-one testid" data-id="{{ $product->id }}"><input type="checkbox"></td>
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
                            <a class="btn btn-warning btn-icon"  @click="edit({{ $product->id }})"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                            <a class="text-danger btn btn-danger btn-icon" @click="destroy({{ $product->id }})"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>

    </div>
@endsection
