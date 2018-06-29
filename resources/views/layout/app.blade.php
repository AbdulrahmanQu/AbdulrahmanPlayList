<html>
<head>
    <title>Welcome to my Playlist</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">

</head>
<body>

{{--@include('inc.navbar')--}}
{{--@include('inc.admin-navbar')--}}
@include('inc.owner-navbar')



@if(Request::is('/Series'))
    @include('inc.SeriesSearch')
@endif

<div class="container">
    @if(Request::is('/'))
        @include('inc.showcase')
    @endif
    <div class="row">
        <div class="col-md-8 col-lg-8">
            @include('inc.masseges')
            @yield('content')
        </div>

        <div class="col-md-8 col-lg-4">

            @if(Request::is('/'))
                <h1>Recently added</h1>
                <div class="vid-list-container">
                    @if(count($recent) > 0)
                        @foreach($recent as $videos)
                            <table>
                                <div class="vid-list">
                                    <div class="vid-item" onClick="document.getElementById('vid_frame').src='http://youtube.com/embed/{{$videos['VideoURL']}}?autoplay=1&rel=0&showinfo=0&autohide=1'">
                                        <div class="thumb"><img src="http://img.youtube.com/vi/{{$videos['VideoURL']}}/0.jpg"></div>
                                        <div class="desc">{{$videos['Videoname']}}</div>
                                    </div>
                                </div>
                            </table>
                        @endforeach
                    @endif
                    @endif
                </div>


            {{--@if(Request::is('/'))--}}
                {{--@include('inc.sidebar')--}}
            {{--@endif--}}

            {{--@if(Request::is('/Series'))--}}
                {{--@include('inc.sidebar')--}}
            {{--@endif--}}

            {{--@if(Request::is('/Movies'))--}}
                {{--@include('inc.sidebar')--}}
            {{--@endif--}}

            {{--@if(Request::is('/addvideos'))--}}
                {{--@include('inc.sidebar')--}}
            {{--@endif--}}
        </div>

        <div class="col-md-8 col-lg-4">
            @if(Request::is('/Movies'))
                @include('inc.MoviesList')
            @endif
        </div>

        <div class="col-md-8 col-lg-4">
            @if(Request::is('/Series'))
                @include('inc.SeriesList')
            @endif
        </div>

    </div>
</div>

<footer id="footer" class="text-center">
    <p>Copyright 2018 &copy: Abdulrahman</p>
</footer>

</body>
</html>