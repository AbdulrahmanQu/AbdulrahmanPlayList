@section('sidebar')
    <div class="col-md-4">
        <h1>Recently added</h1>
        <div class="vid-list-container">
            @if(count($addvideo) > 0)
                @foreach($addvideo as $videos)
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
        </div>
    </div>
	@show