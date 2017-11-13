@extends ('master')
@section('content')
<?php $i = 1;?>
<div class="paymethod">
<h1>@lang('core.paymethod')</h1>
<script src="/js/appjs/typehelper.js"></script>
<table class="table table-hover" id="showallmethod">
  <thead>
    <tr>
      <th>#</th>
      <th>שם</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($methodes as $method)
    <tr>
    <td><?php echo"$i"; $i++; ?></td>
      <td>{{ $method->name }}</td>
      <td>{{ Form::open(array('url' => "/paymethod/$method->id", 'method' => 'delete')) }}
 		  {{ csrf_field() }}
 		  {{ Form::submit(__('core.delete'), ['class' => 'btn btn-outline-danger']) }}
 		  {{Form::close()}}
 		  </td>
    </tr>
  @endforeach
  <tr>
  <td><?php echo"$i"; $i++; ?></td>
	<td>{{ Form::open(array('url' => '/paymethod', 'id' => 'addmethod')) }}
 		{{ csrf_field() }}
		{{Form::text('name', '', ['class' => 'form-control',  'id' => 'name', 'placeholder' => 'לדוגמא: מזומן']) }}
	</td>
	<td>{{ Form::submit(__('core.create'), ['class' => 'btn btn-outline-success']) }} {{Form::close()}}</td>
	</tr>
  </tbody>
</table>
</div>
@endsection('content')
