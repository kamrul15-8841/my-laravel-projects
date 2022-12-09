@extends('admin.master')

@section('title')
    Manage Product
@endsection

@section('body')
    <div class="row pt-3">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="mx-auto text-center">Manage Product</h3>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>
                    <table class="table table-hover table-bordered" id="basic-datatable">
                        <thead>
                        <tr>
                            <th>SI NO</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Description</th>
                            <th>Product Image</th>
                            <th>Product Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->category->name}}</td>
{{--                                <td>{{\App\Models\Category::find($product->category_id)->name}}</td>--}}
                                <td>{{$product->brand->name}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
{{--                                <td>{{$product->description}}}</td>--}}
{{--                                <td>{!! $product->description !!}</td>--}}
{{--                                <td>{!! str_replace($product->description, 20,'......') !!}</td>--}}
                                <td>{!! \Illuminate\Support\Str::words($product->description, 3,'...') !!}</td>
                                <td>
                                    <img src="{{asset('/').$product->image}}" alt="image" height="100" width="100">
                                </td>
                                <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td class="w-100">
                                    <a href="{{route('edit-product', ['id' => $product->id])}}" class="btn btn-warning ">Edit</a>
                                    <a href="{{route('delete-product', ['id' => $product->id])}}" class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete this');">Delete</a>
                                    <a href="{{route('detail-product', ['id' => $product->id])}}" class="btn btn-info">Details</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


