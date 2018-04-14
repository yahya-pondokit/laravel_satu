<form action="{{url('article/store')}}" method="post">
	@foreach($errors->all() as $row)
		<li>{{$row}}</li>
	@endforeach
	<table>
    <tbody>
       <tr>
       	<td>Title</td>
       	<td><input type="text" name="title" value="{{ old('title') }}"></td>
       </tr>
       <tr>
       		<td>Content</td>
       		<td><textarea name="content">{{ old('content') }}</textarea></td>
      </tr>
      <tr>
      	<td></td>
      	<td><button type="submit">Submit</button>
    </tbody>
	{{csrf_field()}}
	
	
</form>