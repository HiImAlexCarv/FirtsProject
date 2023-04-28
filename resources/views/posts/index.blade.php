


<x-layouts.app

title="Blog"
>

    {{-- <x-slot name="title">
        blog Title
    </x-slot> --}}





    <h1>Blog</h1>
<a href="{{ route('posts.create')}}">Crear nuevo post</a>

@foreach ($posts as $post)
<div style =" display:flex;  align-items:baseline">
   <h2>

    <a href="{{ route('posts.show', $post) }}">
        {{ $post ->title }}</a>
</h2> &nbsp;
<a href=" {{ route('posts.edit' , $post) }}"> Edit </a>

</div>

   @endforeach

 </x-layouts.app>
