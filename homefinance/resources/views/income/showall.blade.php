@extends ('master')
@section('content')

<a href = '/income/create' class="btn btn-info">צור הכנסה חדשה</a> 
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
  @foreach ($incomes as $income)
  
    <tr>
      <th scope="row"> <a href="/income/{{ $income->id }}">{{ $income->id }}</a></th>
      <td>{{ $income->name }}</td>
      <td>{{ $income->parent }}</td>
      <td>{{ $income->comments }}</td>
      <td>{{ $income->updated_at }}</td>
    </tr>
  @endforeach
  </tbody>
</table>


@endsection('content')
