@extends('layout.app')
@section('content')
<link href="{{ asset('/css/myvid.css') }}" rel="stylesheet">


	<h1>Admin Video List</h1>
  <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  </head>

    <div class="container">
      <!-- THE YOUTUBE PLAYER -->
      <div class="vid-container">
          <iframe id="vid_frame" src="http://www.youtube.com/embed/eg6kNoJmzkY?rel=0&showinfo=0&autohide=1" frameborder="0" width="560" height="315"></iframe>
      </div>
      <br>
    <table>
      <tr>
        <td width="560">
          Name Of the video
        </td>
        <td><button>Like</button></td>
        <td><button>disLike</button></td>
      </tr>
      <tr>
        <td>Views</td>
      </tr>
    </table>
  </div>
@endsection
@section('sidebar')
@parent
<!--<p>This is the appended to the sidebar</p>-->
@endsection

