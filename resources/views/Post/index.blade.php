
@if (session('success'))
  <div>
     {{ session('success') }}
  </div>
@endif  
  <a href="{{route('Post.create')}}" class="btn btn-info btn-icon-split"><span class="text">create</span></a>
<table>
 <thead>
     <tr>
    <th>ID</th>
    <th>TITLE</th>
    <th>CONTENT</th>
     </tr>
 </thead>
 <tbody>
 @foreach ($Posts as $Post)
   <tr> 
     <td>{{ $Post->id }}</td>
     <td>{{ $Post->title }}</td>
     <td>{{ $Post->content }}</td>
     <td> <a href="{{ route('Post.show',$Post->id)}}" class="btn btn-secondary btn-icon-split"><span class="icon text-white-50"><i class="fas fa-info-circle"></i></span><span class="text">Show</span></a></td>
     <td> <a href="{{ route('Post.edit',$Post->id)}}" class="btn btn-info btn-icon-split"><span class="icon text-white-50"><i class="fas fa-edit"></i></span><span class="text">Edit</span></a></td>
     <td> <a href="{{ route('Post.delete',$Post->id)}}" class="btn btn-danger btn-icon-split"><span class="icon text-white-50"><i class="fas fa-trash"></i></span><span class="text">Delete</span></a></td>
     </tr>
  @endforeach
   </tbody>
</table>
