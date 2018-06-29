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
    {!! Form::open(['url' => 'Authentication/submit']) !!}
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-bordered table-hover dt-responsive">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Authenticated</th>
                        <th>Authenticate</th>
                        <th>User Type</th>
                    </tr>
                    </tr>
                    </thead>
                    @foreach($User as $users)
                        <tbody>
                        <tr>
                            <td>{{$users['id']}}</td>
                            <td>{{$users['name']}}</td>
                            <td>{{$users['email']}}</td>
                            <td>
                                <select name="usertype">Type
                                    <option value="none">none</option>
                                    <option value="User">User</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Owner">Owner</option>
                                </select>
                            </td>
                            <td>{{$users['Auth']}}</td>
                            <td><select name="useraccess">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select></td>
                            <td>{{$users['Type']}}</td>
                        </tr>
                        </tr>
                        </tbody>
                    @endforeach
                    @foreach($owner as $owner)
                        <tbody>
                        <tr>
                            <td>{{$owner['id']}}</td>
                            <td>{{$owner['name']}}</td>
                            <td>{{$owner['email']}}</td>
                            <td>
                                <select name="ownertype">Type
                                    <option value="none">none</option>
                                    <option value="User">User</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Owner">Owner</option>
                                </select>
                            </td>
                            <td>Default</td>
                            <td>Default</td>
                            <td>{{$owner['Type'] }}</td>
                        </tr>
                        </tr>
                        </tbody>
                    @endforeach
                    @foreach($admin as $admins)
                        <tbody>
                        <tr>
                            <td>{{$admins['id']}}</td>
                            <td>{{$admins['name']}}</td>
                            <td>{{$admins['email']}}</td>
                            <td>
                                <select name="admintype">Type
                                    <option value="none">none</option>
                                    <option value="User">User</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Owner">Owner</option>
                                </select>
                            </td>
                            <td>{{$admins['Auth'] }}</td>
                            <td><select name="adminaccess">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select></td>
                            <td>{{$admins['Type'] }}</td>
                        </tr>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
                <input type="submit" value="Submit" class="btn btn-secondary">
                {!! Form::close() !!}
    </div>
    </div>
    </body>
@endsection