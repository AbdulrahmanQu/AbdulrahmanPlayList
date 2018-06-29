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
    <h2 align="left">Users</h2>
    <div class="row">
        <div class="col-xs-12">
                        <table class="table table-bordered table-hover dt-responsive">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>User Type</th>
                                <th>Authentcated</th>
                            </tr>
                            </thead>
                        @foreach($User as $users)
                            <tbody>
                            <tr>
                                <td>{{$users['id']}}</td>
                                <td>{{$users['name']}}</td>
                                <td>{{$users['email']}}</td>
                                <td>{{$users['Type']}}</td>
                                <td>{{$users['Auth'] }}</td>
                            </tr>
                            </tbody>
                            @endforeach
                            @foreach($owner as $owners)
                            <tbody>
                            <tr>
                                <td>{{$owners['id']}}</td>
                                <td>{{$owners['name']}}</td>
                                <td>{{$owners['email']}}</td>
                                <td>{{$owners['Type']}}</td>
                                <td>Default</td>
                            </tr>
                            </tbody>
                            @endforeach
                        @foreach($admin as $admins)
                            <tbody>
                            <tr>
                                <td>{{$admins['id']}}</td>
                                <td>{{$admins['name']}}</td>
                                <td>{{$admins['email']}}</td>
                                <td>{{$admins['Type'] }}</td>
                                <td>{{$admins['Auth'] }}</td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
        </div>
    </div>
    </body>
@endsection
