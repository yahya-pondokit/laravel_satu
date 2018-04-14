
<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
  </head>
  <body>
		@if(Session::has('article'))
		{{Session::get('article')}}
		@endif
	<a href="{{url('article/create')}}">Create New</a>
    <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Title</th>
        <th>Date</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @php
        $no = 0;
      @endphp
      @foreach($article as $row)
      <tr>
        <td>{{++$no}}</td>
        <td>{{$row['title']}}</td>
        <td>{{date('d-F-Y H:i', strtotime($row['created_at']))}}</td>
        <td><a href="{{url('article/edit/'.$row->id)}}">Edit</a></td>
        <td><a href="{{url('article/show/'.$row->id)}}">Detail</a></td>
		<td><a href="{{url('article/destroy/'.$row->id)}}">Hapus</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>