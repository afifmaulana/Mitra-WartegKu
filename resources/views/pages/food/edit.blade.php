@extends('templates.store')
@section('content')

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Add Products
                            <small>Multikart Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Physical</li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Add Product</h5>
                </div>
                <div class="card-body">
                    <div class="row product-adding">

                        <div class="col-xl-7">
                            <form class="needs-validation add-product-form" action="{{route('food.update', $food->id)}}"
                                  method="post" enctype="multipart/form-data">
                                @csrf
                                {{method_field('PATCH')}}
                                <div class="form">
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Food :</label>
                                        <input class="form-control col-xl-8 col-sm-7" id="validationCustom01"
                                               name="name" type="text" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Category :</label>
                                        <select class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1" name="category_id">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->category}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Upload :</label>
                                        <input class="form-control col-xl-8 col-sm-7" id="validationCustom01"
                                               name="image" type="file" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-sm-4">Description :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea  name="description" cols="92" rows="8"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Price :</label>
                                        <input class="form-control col-xl-8 col-sm-7" id="validationCustom01"
                                               name="price" type="text" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>

                                </div>

                                <div class="offset-xl-3 offset-sm-4">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                    <button type="button" class="btn btn-light">Discard</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection