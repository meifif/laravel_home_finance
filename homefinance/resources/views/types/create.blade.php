@extends ('master')
@section('content')

<h1 class="title m-b-md"> הוספת סיווג חדש</h1>
<hr>
<form method="POST" action="/type">
 {{ csrf_field() }}
  <div class="form-group">
    <label for="name">שם</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="לדוגמא: תקשורת" required>
  </div>
  <div class="form-group">
    <label for="description">תיאור</label>
    <textarea type="text" class="form-control" name="description" id="description" placeholder="לדוגמא: הוצאות התקשורת השונות כגון טלפונים ניידים, טלפון קווי, פק ותשתית האינטרנט וכו" required></textarea>
  </div>
    <button type="submit" class="btn btn-primary">צור</button>
        <a href="{{ url()->previous() }}" class="btn btn-info">חזור</a>
</form>

@include('parts.errors')

@endsection('content')
