@extends('layout')

@section('title')Отзывы@endsection

@section('main-content')
	<h1>Форма редактирования отзыва</h1>
	@if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
	@endif
	<form method="post" action="/update/check/{{ $el->id }}">
	@csrf
        <input type="email" name="email" id="email"	class="form-control" value="{{ $el->email }}"><br>
        <input type="text" name="subject" id="subject" class="form-control" value="{{ $el->subject }}" ><br>
        <textarea name="message" id="message" class="form-control" >{{ $el->message }}</textarea><br>
        <button type="submit" class="btn btn-success">Готово</button>
    </form>
@endsection
