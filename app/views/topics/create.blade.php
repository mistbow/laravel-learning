@extends('layouts.main')

@section('content')
	<h1>Create New topic</h1>

	{{ Form::open(['route' => 'topics.store']) }}
		<div>
			{{ Form::label('title', '标题：') }}
			{{ Form::text('title')}}
		</div>
		<div>
			{{ Form::label('body', '正文：') }}
			{{ Form::textarea('body')}}
		</div>

		<div>{{ Form::submit('提交') }}</div>
	{{ Form::close() }}
@stop