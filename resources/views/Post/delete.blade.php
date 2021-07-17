{!! Form::open()->route('Post.destroy',[$Post->id])->method('delete') !!}
<div>
<h2>Are you sure want to delete {{ $Post ->title }} permanently?</h2>
</div>
<a href="{{ route('Post.index')}}" class="btn btn-info btn-icon-split"><span class="text">Cancel</span></a>
<button class="btn btn-danger btn-md float-right"><i class="mdi mdi-delete"></i><i class="fas fa-edit"></i>Delete</button>
{!! Form::close() !!}