@extends ('master')
@section('content')
@include('parts.datatables')
<div class="paymethod">
<h1>@lang('core.paymethod')</h1>
<script src="/js/appjs/typehelper.js"></script>
<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>שם</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($methodes as $method)
    <tr>
    <td>{{ $method->name }}</td>
      <td>{{ $method->name }}</td>
      <td><button type="button" id="closeex" class="btn btn-outline-danger">@lang('core.delete')</button></td>
    </tr>
  @endforeach
  <tr>
  <td>-</td>
	<td>{{Form::text('name', '', ['class' => 'form-control',  'id' => 'name', 'placeholder' => 'לדוגמא: מזומן']) }}	</td>
	      <td><button type="button" id="closeex" class="btn btn-outline-success">@lang('core.create')</button></td>
	
	</tr>
  </tbody>
</table>
</div>
@endsection('content')
