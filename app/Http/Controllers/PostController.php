<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Request\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Post;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

 
class PostController extends Controller
{
   public function index(){
      $Posts = Post::with('user')->orderBy('id','desc')->paginate(12); 
      return view('Post.index',compact('Posts'));
    }

   public function create(){ 
      return view('Post.create');
   }

   public function store(PostStoreRequest $request){
 $data = $request->validated();   
       $user = Auth::user()->id;
       Post::create([
      'user_id' => $user ,  
      'title' => $data['title'],
      'content' => $data['content']
   ]);

   return redirect() ->route('Post.index')->with('success','Post details created succesfully!');
   }  

public function show(Post $Post){
   return view('show',compact('Posts'));
}   
     
public function edit(){
   return view('edit',compact('Post'));
}

public function update(Post $Post,Request $request){

   if ($request->title == 'Name') {
      $data=$request->validate([
         'title' => 'required',
      ]);
      $Post->update($date);
      return redirect()->route('Post.index')->with('sucess','Post details updated sucessfuly'); 
} else {
      return redirect()->back()->with('error' , 'Please check the values carefully');
       }
}

public function delete(Post $Post){
   return view('delete',compact('Post')); 
}

public function destroy(Post $Post){
   $Post->delete();
   return redirect()->route('Post.index')->with('sucess','Post deteils deleted succesfully');

  }

}


