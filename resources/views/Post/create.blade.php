<form method="POST" action="{{ route('Post.store') }}">
<x-lable for="title" :value="__('title')"/>

    <x-input id="title" class="block mt -1w-full" type="text" name="title" :value="old('title')" required autofocus /> 
@include(' form ')
  <button class="btn btn-success btn-md"><i class="mdi mdi-floppy"></i>create</button>
 <a class="btn btn-dark btn-md" href="{{ route('Post.index') }}"><i class="mdi mdi-cancel"></i>Cancel</a>

