@extends('layout.app')
@section('content')
    <head>

        <style type="text/css">
            img
            {
                width: 250px;
                height: 200px;
            }

        </style>

        <title>remove Videos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/addvideo.css') }}">
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{ asset('/js/datatables.js') }}"></script>
        <link href="{{ asset('/css/myvid.css') }}" rel="stylesheet">
    </head>
    <body>
    <h2 align="left">remove Videos</h2>
    <form>
        <div class="row">
            <div class="col-xs-12">
                <table summary="This table shows how to create responsive tables using Datatables' extended functionality" class="table table-bordered table-hover dt-responsive">
                    <thead>
                    <tr>
                        <th>Name of the video</th>
                        <th>Picture of the video</th>
                        <th>remove?</th>
                        <th>Comment</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @if(count($removevideos) > 0)
                            @foreach($removevideos as $rvideos)
                        <td>{{$rvideos->Videoname}}</td>
                        <td><img src="http://img.youtube.com/vi/{{$rvideos->VideoURL}}/0.jpg"></td>
                        <td>
                            <select name="action">Action
                                <option value="yes">Yes</option>
                                <option value="yes">No</option>
                            </select>
                        </td>

                            <td><textarea></textarea></td>
                    </tr>
                    @endforeach
                    @endif
                    </tbody>
                </table>
                <input type="submit" value="Submit" class="btn btn-secondary">
    </form>
    </div>
    </div>
    </body>
@endsection