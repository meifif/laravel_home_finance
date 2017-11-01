@extends ('master')
@section('content')
@include('parts.datatables')

<a href = '/type/create' class="btn btn-info">צור סיווג חדש</a> 
<br><br>
<script src="/js/appjs/typehelper.js"></script>
<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>שם</th>
      <th>תיאור</th>
      <th>עודכן לאחרונה</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($types as $type)
  
    <tr>
      <th scope="row"> <a href="/type/{{ $type->id }}">{{ $type->id }}</a></th>
      <td>{{ $type->name }}</td>
      <td>{{ $type->description }}</td>
      <td>{{ $type->updated_at }}</td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection('content')
