@extends ('master')
@section('content')
<h1> עריכת סיווג - {{$type->name}}</h1>
<hr>
<form method="POST" action="/type/{{$type->id}}">
{!! method_field('patch') !!}
 {{ csrf_field() }}
  <div class="form-group">
    <label for="name">שם</label>
    <input type="text" class="form-control" name="name" id="name"  value="{{$type->name}}" required>
  </div>
  <div class="form-group">
    <label for="description">תיאור</label>
    <input type="text" class="form-control" name="description" id="description" value="{{$type->description}}" required>
  </div>
    <button type="submit" class="btn btn-primary">עדכן</button>
    <a href="{{ url()->previous() }}" class="btn btn-info">חזור</a>
</form>

@include('parts.errors')


@endsection('content')
