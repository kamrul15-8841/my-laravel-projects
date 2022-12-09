@extends('admin.master')

@section('title')
    Manage Brand
@endsection

@section('body')
    <div class="row pt-3">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="mx-auto text-center">Manage Brand</h3>
                </div>
                <div class="card-body">
                    <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>
                    <table class="table table-hover table-bordered" id="basic-datatable">
                        <thead>
                        <tr>
                            <th>SI NO</th>
                            <th>Brand Name</th>
                            <th>Brand Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brands as $brand)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$brand->name}}</td>
                            <td>{{$brand->status == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td>
                                <a href="{{route('edit-brand', ['id' => $brand->id])}}" class="btn btn-outline-warning ">Edit</a>
                                <a href="{{route('delete-brand', ['id' => $brand->id])}}" class="btn btn-outline-danger "  onclick="return confirm('Are you sure you want to delete this');">Delete</a>

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

