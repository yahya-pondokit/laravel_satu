<table>
    <thead>
      <tr>
        <th>Date</th>
        <th>Title</th>
        <th>Content</th>
        <th>Created at</th>
        <th>Updated at</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{date('d-F-Y H:i', strtotime($article['created_at']))}}</td>
        <td>{{$article['title']}}</td>
        <td>{{$article['content']}}</td>
        <td>{{date('d-F-Y H:i', strtotime($article['created_at']))}}</td>
        <td>{{date('d-F-Y H:i', strtotime($article['updated_at']))}}</td>
      </tr>
    </tbody>
</table>
<a href="{{url('article/')}}">Go Back</a>