@extends('user.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ">
                    <video class="" style="height: 500px; width: 100%; border-radius: 10px" controls autoplay>
                        <source src="{{asset('/'.$content->video)}}" type="video/mp4">
                        <source src="{{asset('/'.$content->video)}}" type="video/ogg">
                    </video>
                    <div class="video-info">
                        <p class="video-title">
                            {{$content->title}}
                        </p>
                        <p class="video-author">
                            {{$content->sub_title}}
                        </p>
                        <p class="video-stats">
                            3.4M views &#183; 6 months ago
                        </p>
                    </div>
                </div>
                <div class="col-md-4" style="overflow-y: scroll; height:650px;">
                    <section class="video-grid">
                            <div class="video-preview" >
                                @foreach($contents as $content)
                                <div class="thumbnail-row">
                                    <a href="{{route('content.detail', ['id' => $content->id])}}">
                                        <img class="thumbnail" src="{{asset('/').$content->thumbnail}}" alt="" style="height: 175px; width: 310px; border-radius: 10px">
                                    </a>
                                    <div class="video-time">14:20</div>
                                </div>
                                <div class="video-info-grid">
                                    <div class="channel-picture">
                                        <img class="profile-picture" src="{{asset('/').$content->profile}}" alt="" style=" width: 40px;height: 40px; border-radius: 50%;">
                                    </div>
                                    <div class="video-info">
                                        <p class="video-title">
                                            {{$content->title}}
                                        </p>
                                        <p class="video-author">
                                            {{$content->sub_title}}
                                        </p>
                                        <p class="video-stats">
                                            3.4M views &#183; 6 months ago
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
