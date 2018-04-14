<form action="{{url('article/store')}}" method="post">
	<input type="hidden" name="id" value="{{$article->id}}">
	<table>
    <tbody>
      <tr>
      	<td>Date Created :</td>
        <td>{{date('d-F-Y H:i', strtotime($article['created_at']))}}</td>
       </tr>
       <tr>
       	<td>Title :</td>
       	<td><input type="text" name="title" value="{{$article->title}}"></td>
       </tr>
       <tr>
       		<td>Content :</td>
       		<td><textarea name="content">{{$article->content}}</textarea></td>
      </tr>
      <tr>
      	<td></td>
      	<td><button type="submit">Update</button></td>
    </tbody>
	{{csrf_field()}}
	
	
</form>