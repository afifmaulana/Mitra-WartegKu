@extends('templates.store')
@section('content')

    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Product List
                            <small>Multikart Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Physical</li>
                        <li class="breadcrumb-item active">Product List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <a href="{{route('food.create')}}">
        <button class="float-right btn btn-primary"><i class="fa fa-plus"></i></button>
    </a>


<div class="row products-admin ratio_asos">
    @foreach($foods as $food)
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body product-box">
                <div class="img-wrapper">
                    <div class="front">
                        <a href="#"><img src="../assets/images/pro3/34.jpg" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                        <div class="product-hover">
                            <ul>
                                <li>
                                    <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                </li>
                                <li>
                                    <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="product-detail">
                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                    <a href="#">
                        <h6>{{$food->name}}</h6>
                    </a>
                    <h4>{{$food->price}}</h4>
                    <ul class="color-variant">
                        <li class="bg-light0"></li>
                        <li class="bg-light1"></li>
                        <li class="bg-light2"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>



    @endsection
