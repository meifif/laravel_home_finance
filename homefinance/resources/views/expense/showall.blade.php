@extends ('master')
@section('content')
@include('parts.datatables')

<a href = '/expense/create' class="btn btn-info">צור הכנסה חדשה</a> 
<br><br>
<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>שם</th>
      <th>סיווג</th>
      <th>הערות</th>
      <th>עודכן לאחרונה</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($expenses as $expense)
  
    <tr>
      <th scope="row"> <a href="/expense/{{ $expense->id }}">{{ $expense->id }}</a></th>
      <td>{{ $expense->name }}</td>
      <td>{{ $expense->getParent->name }}</td>
      <td>{{ $expense->comments }}</td>
      <td>{{ $expense->updated_at }}</td>
    </tr>
  @endforeach
  </tbody>
</table>


@endsection('content')
