@extends('layout')

@section('title')Отзывы@endsection

@section('main-content')
		<div class="alert aler-info">
			<h3>{{ $el->subject }}</h3>
			<table><tr>
				<td>{{ $el->email }}<br><small>{{ $el->created_at }}</small><br><small>{{ $el->updated_at }}</small></td>
				<td><p style="padding-left: 20px;"><em>{{ $el->message }}</em></p></td>
			</tr><tr>
				<td><a href="{{ route('delete' , $el->id ) }}">
					<button style="margin-top: 16px;" class="btn btn-danger" >Удалить</button>
				</a></td>
				<td><a href="{{ route('update' , $el->id ) }}">
					<button style="margin-top: 16px;margin-left:16px" class="btn btn-primary">Редактировать</button>
				</a></td>
			
			</tr></table>
		</div>
		
@endsection
