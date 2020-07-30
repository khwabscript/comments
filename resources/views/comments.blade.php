@extends('templates.default')

@section('content')
<div class="content">
    <div class="layout">
        @foreach($comments as $comment)
            @include('templates.comment')
        @endforeach
    	<div class="hr"></div>
    	<h2>Оставить комментарий</h2>
    	<form action="/" method="POST">
            @csrf
    		<label>Ваше имя</label>
    		<input type="text" name="author" required>
    		<label>Ваш комментарий</label>
    		<textarea name="text" required></textarea>
    		<button type="submit">Отправить</button>
    	</form>
    </div>
</div>
@endsection