@extends ('master') @section('content')

<h1 class="title m-b-md">@lang('scenario.newscenario')</h1>
<hr>
{{ Form::open(array('url' => '/scenario/create')) }} 
{{ csrf_field() }}

<div class="form-group">{{ Form::label('name', __('core.name'))}} 
{{Form::text('name', '', ['class' => 'form-control', 'placeholder' =>'לדוגמה: ילד ראשון']) }}
</div>

<div class="form-group">
	{{ Form::label('comments', 'תיאור')}} 
	{{Form::textarea('description', '', ['class' => 'form-control', 'rows' =>'3' , 'placeholder' => 'לדוגמה: שינוי מסלול החם עקב הבייבי החדש']) }}
	</div>

<div class="form-group">
	{{ Form::label('comments', 'תאריך כניסה לתוקף')}}
	{{ Form::date('description', '') }}
	</div>

<div class="scenariondiv income">
	<h2>הכנסות</h2>
	<button type="button" id="income" class="btn btn-success">הוסף</button>
	<table class="table">
		<thead class="thead-inverse">
			<tr>
				<th>שם הכנסה</th>
				<th>סכום</th>
				<th>הערות</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{Form::text('inname', '', ['class' => 'form-control',  'id' => 'inname', 'disabled' => 'true']) }}
					{{Form::hidden('inname') }}	</td>
				<td>{{Form::text('invalue', '', ['class' => 'form-control', 'id' => 'invalue']) }}</td>
				<td>{{Form::text('invalue', '', ['class' => 'form-control', 'id' => 'invalue']) }}</td>
			</tr>
		</tbody>
	</table>
</div>

<div class="scenariondiv fixexpance">
	<h2>הוצאות קבועות</h2>
	<button type="button" id="fixexpance" class="btn btn-success">הוסף</button>
	<table class="table">
		<thead class="thead-inverse">
			<tr>
				<th>שם הוצאה</th>
				<th>סכום</th>
				<th>שיטת תשלום</th>
				<th>הערות</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{Form::text('fixexpancename', '', ['class' => 'form-control',  'id' => 'fixexpancename', 'disabled' => 'true']) }}
					{{Form::hidden('fixexpanceid') }}	</td>
				<td>{{Form::text('fixexpancevalue', '', ['class' => 'form-control', 'id' => 'fixexpancevalue']) }}</td>
				<td>{{Form::text('fixexpancepaymethod', '', ['class' => 'form-control', 'id' => 'fixexpancepaymethod']) }}</td>
				<td>{{Form::text('fixexpancecomment', '', ['class' => 'form-control', 'id' => 'fixexpancecomment']) }}</td>
			</tr>
		</tbody>
	</table>

</div>

<div class="scenariondiv chengeexpance">
	<h2>הוצאות משתנות</h2>
	<button type="button" id="chengeexpance" class="btn btn-success">הוסף</button>
<table class="table">
		<thead class="thead-inverse">
			<tr>
				<th>שם הוצאה</th>
				<th>סכום</th>
				<th>שיטת תשלום</th>
				<th>הערות</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{Form::text('chengeexpancename', '', ['class' => 'form-control',  'id' => 'chengeexpancename', 'disabled' => 'true']) }}
					{{Form::hidden('chengeexpanceid') }}	</td>
				<td>{{Form::text('chengeexpancevalue', '', ['class' => 'form-control', 'id' => 'chengeexpancevalue']) }}</td>
				<td>{{Form::text('chengeexpancepaymethod', '', ['class' => 'form-control', 'id' => 'chengeexpancecomment']) }}</td>
				<td>{{Form::text('chengeexpancecomment', '', ['class' => 'form-control', 'id' => 'chengeexpancecomment']) }}</td>
			</tr>
		</tbody>
	</table>
</div>


{{ Form::submit('צור',array('class' => 'btn btn-primary')) }}
<a href="{{ url()->previous() }}" class="btn btn-info">חזור</a>

{{ Form::close() }} @include('parts.errors')

<div class="incomeslist">
	<h4>רשימת הכנסות אפשריות</h4>
	<button type="button" id="closein" class="btn btn-outline-danger">סגור
		חלון</button>
	<p>
		באפשרותך לערוך את הרשימה <a href="/income">פה</a>
	</p>
	<ul id="DragWordList">
	@foreach ($incomes as $income)
	<li class="list-group-item list-group-item-action flex-column align-items-start" id={{ $income->id }}>
		{{ $income->name }}
		</li> 		
	@endforeach
	</ul>
</div>

<div class="expancesslist">
	<h4>רשימת הוצאות אפשריות</h4>
	<button type="button" id="closeex" class="btn btn-outline-danger">סגור
		חלון</button>
	<p>
		באפשרותך לערוך את הרשימה <a href="/expense">פה</a>
	</p>
	<ul id="DragWordListExp">
	@foreach ($expances as $expance)
	<li class="list-group-item list-group-item-action flex-column align-items-start">{{ $expance->name }}</li>
	 @endforeach
	 </ul>
</div>

<script src="/js/create_scenario_helper.js"></script>
@endsection('content')
