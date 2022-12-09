@extends('master')

@section('title')
    Update Content
@endsection

@section('body')
    <section class="py-5 bg-secondary ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-info">
                        <div class="card-header fw-bold h3 text-center ">Update Content</div>
                        <div class="card-body">
                            <h3 class="text-center text-white">{{Session::get('message')}}</h3>
                            <form action="{{route('content.update' , ['id' => $content->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 text-white h5">Content Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title" value="{{$content->title}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 text-white h5">Content Sub Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="sub_title" value="{{$content->sub_title}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 text-white h5">Content profile</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="profile">
                                        <img src="{{asset('/').$content->profile}}" alt="" height="100" width="100">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 text-white h5">Content thumbnail</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="thumbnail">
                                        <img src="{{asset('/').$content->thumbnail}}" alt="" height="100" width="100">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3 text-white h5">Content video</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="video">
{{--                                        <img src="{{asset('/').$content->video}}" alt="" height="100" width="100">--}}
                                        <video width="80" height="80" controls>
                                            <source src="{{asset('/'.$content->video)}}" type="video/mp4">
                                            <source src="{{asset('/'.$content->video)}}" type="video/ogg">
                                        </video>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 text-white h5"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-warning text-dark fw-bold h1" value="Update Content">
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

