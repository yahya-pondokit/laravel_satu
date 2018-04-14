<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Index Page</title>
	</head>
	<body>
		<a href="{{url('article/create')}}">Create Article/a>
		<br>
		@if(Session::has('santri'))
		{{Session::get('santri')}}
		@endif
		@php
		$key = 0;
		@endphp
		<br>
		@foreach($article as $a)
		- No : {{$key}}
		- Title : {{$a->title}} 
		- Date : {{$row->created_at}} 
		- <a href="{{url('article/edit/'.$row->id)}}">Edit</a>
		- <a href="{{url('article/show/'.$row->id)}}">Detail</a>
		- <a href="{{url('article/delete/'.$row->id)}}">Delete</a> 
		<br>
		@endforeach