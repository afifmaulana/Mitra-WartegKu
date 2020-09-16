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
                        <a href="#"><img src="{{asset('uploads/store/'.$food->image)}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                        <div class="product-hover">
                            <ul class="btn">
                                <li>
                                    <a href="{{route('food.edit', $food->id)}}">
                                    <button class="btn" type="button"><i class="fa fa-pencil"></i></button>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('food.destroy', $food->id)}}">
                                    <button class="btn" type="button"><i class="fa fa-trash"></i></button>
                                    </a>
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
                    {{--<a href="{{route('food.edit', $food->id)}}">--}}
                        {{--<button class="btn-warning fa fa-pencil"></button>--}}
                    {{--</a>--}}
                    {{--<ul class="color-variant">--}}
                        {{--<li href="#" class="fa fa-eye"></li>--}}
                        {{--<li href="{{route('food.edit', $food->id)}}" class="fa fa-pencil"></li>--}}
                        {{--<li href="#" class="fa fa-trash"></li>--}}

                    {{--</ul>--}}
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>



    @endsection
