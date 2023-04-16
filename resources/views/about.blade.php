{{-- @component('components.layout')
<h1>about</h1>    
 @endcomponent   --}}
 {{--// todo esto se imprimira en el $slot que esta en layout.blade.php --}}


{{-- // OTRA FORMA DE ESCRIBIR LO DE ARRIBA // --}}


<x-layouts.app 

title="about"
>

    {{-- <x-slot name="title">
        abou Title
    </x-slot> --}}
    
    
    <h1>About</h1>
</x-layouts.app>