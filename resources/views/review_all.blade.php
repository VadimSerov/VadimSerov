@extends('layout')

@section('title')Отзывы@endsection

@section('main-content')
	@foreach($data as $el)
		<div class="alert aler-info">
			<h3>{{ $el->subject }}</h3>
			<table><tr>
				<td>{{ $el->email }}<br><small>{{ $el->created_at }}</small></td>
				<td><a style="padding-left: 16px;" href="{{ route('one', $el->id) }}"><button class="btn btn-warning">Подробнее</button></a></td>
			</tr></table>
		</div>
	@endforeach

@endsection
