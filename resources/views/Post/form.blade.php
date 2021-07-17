<div>
    <x-lable for="title" :value="__('title')"/>

    <x-input id="title" class="block mt -1w-full" type="text" name="title" :value="old('title')" required autofocus /> 
</div>
<div>
    <x-label for="content" :value="__('content')"/>

    <x-input id="content" class="block mt -1w-full" type="textarea" name="content" :value="old('content')" required autofocus />

</div>