@extends ('master')
@section('content')

<h1 class="title m-b-md"> יצירת תסריט חדש</h1>
<hr>
{{ Form::open(array('url' => '/scenario/create')) }}
 {{ csrf_field() }}
 
  <div class="form-group">
 {{ Form::label('name', 'שם')}}
 {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'לדוגמה: ילד ראשון']) }}
 </div>
 
  <div class="form-group">
 {{ Form::label('comments', 'תיאור')}}
 {{ Form::textarea('description', '', ['class' => 'form-control', 'rows' => '3'	, 'placeholder' => 'לדוגמה: שינוי מסלול החם עקב הבייבי החדש']) }}
 </div>

  <div class="form-group">
 {{ Form::label('comments', 'תאריך כניסה לתוקף')}}
 {{ Form::date('description', '') }}
 </div>
 
 <div class="scenariondiv income">
 <h2>הכנסות</h2>
<button type="button" class="btn btn-success">הוסף</button> 
 </div>

 <div class="scenariondiv fixexpance">
 	<h2> הוצאות קבועות</h2>
 	<button type="button" class="btn btn-success">הוסף</button> 
 	
 </div>

 <div class="scenariondiv chengeexpance">
  <h2>הוצאות משתנות</h2>
  <button type="button" class="btn btn-success">הוסף</button> 
  
 </div>
 
 
 {{ Form::submit('צור',array('class' => 'btn btn-primary')) }}
 <a href="{{ url()->previous() }}" class="btn btn-info">חזור</a>
       
{{ Form::close() }}

@include('parts.errors')

<div class="incomeslist">
@foreach ($incomes as $income)
    <li> {{ $income->name }}</li>
@endforeach
</div>


@endsection('content')
