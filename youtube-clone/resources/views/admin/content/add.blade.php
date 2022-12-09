@extends('master')

@section('title')
  Add Content
@endsection

@section('body')
    <section class="py-5 bg-secondary ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-info">
                        <div class="card-header fw-bold h3 text-center ">Add Content</div>
                        <div class="card-body">
                            <h3 class="text-center text-white">{{Session::get('message')}}</h3>
                            <form action="{{route('content.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 text-white h5">Content Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 text-white h5">Content Sub Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="sub_title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 text-white h5">Content profile</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="profile">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 text-white h5">Content thumbnail</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="thumbnail">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3 text-white h5">Content video</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="video">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 text-white h5"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-warning text-dark fw-bold h1" value="Create New Content">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
