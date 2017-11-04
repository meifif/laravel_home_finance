@extends ('master')
@section('content')

<h1 class="title m-b-md"> יצירת הוצאה חדש</h1>
<hr>
{{ Form::open(array('url' => '/expense')) }}
 {{ csrf_field() }}
 
  <div class="form-group">
 {{ Form::label('name', 'שם')}}
 {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'לדוגמה: שכר דירה']) }}
 </div>
 
 <div class="form-group">
 {{ Form::label('parent', 'סיווג')}}
 {!! Form::select('parent', $parents, null, ['class' => 'form-control']) !!}
 </div>
 
  <div class="form-group">
 {{ Form::label('comments', 'הערות')}}
 {{ Form::textarea('comments', '', ['class' => 'form-control', 'placeholder' => 'לדוגמה: שכר דירה עבור הבית']) }}
 </div>

 {{ Form::submit('צור',array('class' => 'btn btn-primary')) }}
 <a href="{{ url()->previous() }}" class="btn btn-info">חזור</a>
       
{{ Form::close() }}

@include('parts.errors')

@endsection('content')
