@extends ('master')
@section('content')
<h1> עריכת הכנסה - {{$income->name}}</h1>
<hr>
{{ Form::open(['url' => '/income/' . $income->id]) }}
{!! method_field('patch') !!}
 {{ csrf_field() }}
 
  <div class="form-group">
 {{ Form::label('name', 'שם')}}
 {{ Form::text('name', $income->name, ['class' => 'form-control']) }}
 </div>
 
  <div class="form-group">
 {{ Form::label('comments', 'הערות')}}
 {{ Form::textarea('comments', $income->comments, ['class' => 'form-control', 'value' => $income->comments]) }}
 </div>

 {{ Form::submit('עדכן',array('class' => 'btn btn-primary')) }}
 <a href="{{ url()->previous() }}" class="btn btn-info">חזור</a>
       
{{ Form::close() }}


@include('parts.errors')


@endsection('content')
