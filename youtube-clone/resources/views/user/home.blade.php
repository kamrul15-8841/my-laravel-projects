@extends('user.master')

@section('body')
    <main>
        <section class="video-grid">
            @foreach($contents as $content)
                <div class="video-preview" >

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

                </div>
            @endforeach
        </section>
    </main>
@endsection





{{--<div class="video-preview">--}}
{{--    <div class="thumbnail-row">--}}
{{--        <img class="thumbnail" src="{{asset('/')}}youtube/thumbnail/thumbnail-2.webp" alt="">--}}
{{--        <div class="video-time">08:22</div>--}}
{{--    </div>--}}
{{--    <div  class="video-info-grid">--}}
{{--        <div class="channel-picture">--}}
{{--            <img class="profile-picture" src="{{asset('/')}}youtube/channel-picture/channel-2.jpeg" alt="">--}}
{{--        </div>--}}
{{--        <div class="video-info">--}}
{{--            <p class="video-title">--}}
{{--                Try Not To Laugh Challenge #9--}}
{{--            </p>--}}
{{--            <p class="video-author">--}}
{{--                Markiplier--}}
{{--            </p>--}}
{{--            <p class="video-stats">--}}
{{--                19M views &#183; 4 years ago--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="video-preview">--}}
{{--    <div class="thumbnail-row">--}}
{{--        <img class="thumbnail" src="{{asset('/')}}youtube/thumbnail/thumbnail-3.webp" alt="">--}}
{{--        <div class="video-time">09:13</div>--}}
{{--    </div>--}}
{{--    <div class="video-info-grid">--}}
{{--        <div class="channel-picture">--}}
{{--            <img class="profile-picture" src="{{asset('/')}}youtube/channel-picture/channel-3.jpeg" alt="">--}}
{{--        </div>--}}
{{--        <div class="video-info">--}}
{{--            <p class="video-title">--}}
{{--                Crazy Tik Toks Taken Moments Before DISASTER--}}
{{--            </p>--}}
{{--            <p class="video-author">--}}
{{--                SSSniperWolf--}}
{{--            </p>--}}
{{--            <p class="video-stats">--}}
{{--                12M views &#183;1 year ago--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="video-preview">--}}
{{--    <div class="thumbnail-row">--}}
{{--        <img class="thumbnail" src="{{asset('/')}}youtube/thumbnail/thumbnail-4.webp" alt="">--}}
{{--        <div class="video-time">22:09</div>--}}
{{--    </div>--}}
{{--    <div class="video-info-grid">--}}
{{--        <div class="channel-picture">--}}
{{--            <img class="profile-picture" src="{{asset('/')}}youtube/channel-picture/channel-4.jpeg" alt="">--}}
{{--        </div>--}}
{{--        <div class="video-info">--}}
{{--            <p class="video-title">--}}
{{--                The Simplest Math Problem No One Can Solve - Collatz Conjecture--}}
{{--            </p>--}}
{{--            <p class="video-author">--}}
{{--                Veritasium--}}
{{--            </p>--}}
{{--            <p class="video-stats">--}}
{{--                18M views &#183; 4 months ago--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="video-preview">--}}
{{--    <div class="thumbnail-row">--}}
{{--        <img class="thumbnail" src="{{asset('/')}}youtube/thumbnail/thumbnail-5.webp" alt="">--}}
{{--        <div class="video-time">11:17</div>--}}
{{--    </div>--}}
{{--    <div  class="video-info-grid">--}}
{{--        <div class="channel-picture">--}}
{{--            <img class="profile-picture" src="{{asset('/')}}youtube/channel-picture/channel-5.jpeg" alt="">--}}
{{--        </div>--}}
{{--        <div class="video-info">--}}
{{--            <p class="video-title">--}}
{{--                Kadane's Algorithm to Maximum Sum Subarray Problem--}}
{{--            </p>--}}
{{--            <p class="video-author">--}}
{{--                CS Dojo--}}
{{--            </p>--}}
{{--            <p class="video-stats">--}}
{{--                519K views &#183; 5 years ago--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="video-preview">--}}
{{--    <div class="thumbnail-row">--}}
{{--        <img class="thumbnail" src="{{asset('/')}}youtube/thumbnail/thumbnail-6.webp" alt="">--}}
{{--        <div class="video-time">19:59</div>--}}
{{--    </div>--}}
{{--    <div class="video-info-grid">--}}
{{--        <div class="channel-picture">--}}
{{--            <img class="profile-picture" src="{{asset('/')}}youtube/channel-picture/channel-6.jpeg" alt="">--}}
{{--        </div>--}}
{{--        <div class="video-info">--}}
{{--            <p class="video-title">--}}
{{--                Anything You Can Fit In The Circle I’ll Pay For--}}
{{--            </p>--}}
{{--            <p class="video-author">--}}
{{--                MrBeast--}}
{{--            </p>--}}
{{--            <p class="video-stats">--}}
{{--                141M views &#183; 1 year ago--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

