@if (count($errors))
	<div class="form-group">
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->All() as $error)
				<li>{{ $error}} </li>
				@endforeach
			</ul>		
		</div>
	</div>
@endif