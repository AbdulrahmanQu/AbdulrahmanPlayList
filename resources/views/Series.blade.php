@extends('layout.app')
@section('content')

  <head>
    <link href="{{ asset('/css/myvid.css') }}" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  </head>

  <div class="container">
    <!-- THE YOUTUBE PLAYER -->
    <div class="vid-container">
      <iframe id="vid_frame" src="http://www.youtube.com/embed/eg6kNoJmzkY?rel=0&showinfo=0&autohide=1" frameborder="0"></iframe>
    </div>
  </div>

  <div class="well">
      <table>
          <div class="vid-list-container">
              <div class="vid-list">
                  <tr>
                      <h1>Latest Series</h1>
                  </tr>
                  <tr>
                      @if(count($Series) > 0)
                          @foreach($Series as $Series)
                              <td><div class="vid-item" onClick="document.getElementById('vid_frame').src='http://youtube.com/embed/{{$Series['VideoURL']}}?autoplay=1&rel=0&showinfo=0&autohide=1'">
                                      <div class="thumb"><img src="http://img.youtube.com/vi/{{$Series['VideoURL']}}/0.jpg"></div>
                                      <div class="desc">{{$Series['Videoname']}}</div>
                                  </div></td>
                          @endforeach
                      @endif
                  </tr>
              </div>
          </div>
      </table>
  </div>
@endsection