@extends('layout')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Laravel 5.5 CRUD</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-succes" href="{{ route('articles.create') }}"> Creer un nouvel article
				
			</a>
		</div>
	</div>
</div>
@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
@endif

<table class="table table-bordered">
	<tr>
		<th>No</th>
		<th>Titre</th>
		<th>Corps</th>
		<th width="280px">Action</th>
	</tr>
	@foreach($articles as $article)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $article->title }}</td>
		<td>{{ $article->body }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('articles.show',$article->id) }}">Montrer</a>
			<a class="btn btn-primary" href="{{ route('articles.edit',$article->id) }}">Modifier</a>
			{!! Form::open(['method' => 'DELETE','route' => ['articles.destroy', $article->id], 'style'=>'display:inline']) !!}
			{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
			{!! Form::close() !!}
		</td>
	</tr>
	@endforeach
</table>

{!! $articles->links() !!}
@endsection