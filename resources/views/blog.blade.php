


<x-layouts.app

title="Blog"
>

    {{-- <x-slot name="title">
        blog Title
    </x-slot> --}}


    <h1>Blog</h1>

   @foreach ($posts as $post)

   <h2>{{ $post ->title }}</h2>

   @endforeach
 </x-layouts.app>
