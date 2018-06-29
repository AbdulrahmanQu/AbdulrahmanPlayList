@section('sidebar')
	<div class="well">
    <h1>Latest Videos</h1>
		<table>
			@if(count($messages) > 0)
				@foreach($messages as $Message)
                    <ul class="list-group">
                        <li class="list-group-item">Name:{{ $Message->name}}</li>
                        <li class="list-group-item">email{{ $Message->email}}</li>
                        <li class="list-group-item">message{{ $Message->message}}</li>
                    </ul>
					@endforeach
				@endif
		</table>
	</div>
	@show