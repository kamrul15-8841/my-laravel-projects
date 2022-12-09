@extends('admin.master')

@section('title')
    Update Product
@endsection

@section('body')
    <div class="row py-3">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="mx-auto text-center">Update Product</h3>
                </div>
                <div class="card-body">
                    {{--<h3 class="text-center text-info">{{Session::get('message')}}</h3>--}}
                    <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>
                    <form method="POST" action="{{route('update-product', ['id' => $product->id] )}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <select name="category_id" id="" class="form-control">
                                    <option value="" selected disabled><-- Select a Category --></option>--}}
{{--                                    <option selected value="{{$product->category_id}}">{{$product->category->name}}</option>--}}
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected' :  ''}}>{{$category->name}}</option>
                                    @endforeach
{{--                                    <option value="" selected disabled><-- Select a Category --></option>--}}
{{--                                    @foreach($products as $product)--}}
{{--                                        <option value="{{$product->category->id}}">{{$product->category->name}}</option>--}}
{{--                                    @endforeach--}}
                                </select>
                                {{--                                <input type="text" name="name" class="form-control">--}}
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Brand Name</label>
                            <div class="col-md-8">
                                <select name="brand_id" id="" class="form-control">
                                    <option value="" selected disabled><-- Select a Brand --></option>--}}
{{--                                    <option selected value="{{$product->brand_id}}">{{$product->brand->name}}</option>--}}
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}" {{$brand->id == $product->brand_id ? 'selected' :  ''}}>{{$brand->name}}</option>
                                    @endforeach
{{--                                    <option value="" selected disabled><-- Select a Brand --></option>--}}
{{--                                    @foreach($brands as $brand)--}}
{{--                                        <option value="{{$brand->id}}">{{$brand->name}}</option>--}}
{{--                                    @endforeach--}}
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Product Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" value="{{$product->name}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Product Price</label>
                            <div class="col-md-8">
                                <input type="number" name="price" value="{{$product->price}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Product Description</label>
                            <div class="col-md-8">
                                <textarea name="description" id="description" rows="5" cols="30" class="form-control">
                                    {!! $product->description !!}
                                </textarea>
                                {{--                                <input type="text" name="name" class="form-control">--}}
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Product Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <label><input type="radio" name="status" value="1" {{$product->status == 1 ? 'checked' : ''}}> Published</label>
                                <label><input type="radio" name="status" value="0" {{$product->status == 0 ? 'checked' : ''}}> Unpublished</label>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit"  class="btn btn-outline-info" value="Update Product">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

