@extends('master')

@section('title')
    Manage Content
@endsection

@section('body')
    <section class="py-5 bg-secondary ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card bg-info">
                        <div class="card-header fw-bold h3 text-center">All Content Information</div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered text-white">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Profile Pic</th>
                                    <th>Thumbnail</th>
                                    <th>Video</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <h3 class="text-center text-white">{{Session::get('message')}}</h3>
                                @foreach($contents as $content)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$content->title}}</td>
                                        <td>{{$content->sub_title}}</td>
                                        <td>
                                            <img src="{{asset('/'.$content->profile)}}" alt="" height="60" width="100">
                                        </td>
                                        <td>
                                            <img src="{{asset('/'.$content->thumbnail)}}" alt="" height="60" width="100">
                                        </td>
                                        <td>
{{--                                            <img src="{{asset('/'.$content->video)}}" alt="" height="60" width="100">--}}
{{--                                            <iframe src="{{asset('/'.$content->video)}}" frameborder="0" height="60" width="100"></iframe>--}}
                                            <video width="80" height="80" controls>
                                                <source src="{{asset('/'.$content->video)}}" type="video/mp4">
                                                <source src="{{asset('/'.$content->video)}}" type="video/ogg">
                                            </video>
                                        </td>
                                        <td>
                                            <a href="{{route('content.edit', ['id' => $content->id])}}" class="text-warning h3 mx-auto"><i class="fa fa-edit"></i></a>
                                            <a href="{{route('content.delete', ['id' => $content->id])}}" class="text-danger h3" onclick="return confirm('Are You sure want to delete this ?')"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
