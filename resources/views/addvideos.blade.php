@extends('layout.app')
@section('content')
    <head>
        <title>Add Videos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/addvideo.css') }}">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{ asset('/js/datatables.js') }}"></script>
        <link href="{{ asset('/css/myvid.css') }}" rel="stylesheet">
    </head>
    <body>

    <div class="col-md-10">
        {!! Form::open(['url' => 'addvideos/submit']) !!}

        <div id="contact-form" class="form-container" data-form-container>
            <div class="row">
                <div class="form-title">
                    <span>Add a Video</span>
                </div>
            </div>
            <div class="input-container">
                <div class="row">
					<span class="req-input" >
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Enter The Name of the Video."> </span>
						<input type="text" data-min-length="8" placeholder="Enter The Name of the Video" name="Videoname">
					</span>
                </div>
                <div class="row">
					<span class="req-input message-box">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Enter The URL For The Video ."> </span>
						<textarea type="textarea" data-min-length="10" placeholder="Enter The URL For The Video " name="VideoURL"></textarea>
                </div>
                <div class="row">
					<span class="req-input">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Enter the type for the Video ."> </span>
                        <input list=types class="list" placeholder="Enter the Type for the Video" name="VideoType">
                    <datalist id=types >
                         <option value="Series"></option>
                            <option value="Movies"></option>
                    </datalist>
                </div>
                <div class="row submit-row">
                    <button type="submit" class="btn btn-block submit-form" >Add</button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>


    </span></div>
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
    </body>
@endsection
