{{-- @component('components.layout')
<h1>contacto</h1>    
 @endcomponent   --}}
 {{--// todo esto se imprimira en el $slot que esta en layout.blade.php --}}


{{-- // OTRA FORMA DE ESCRIBIR LO DE ARRIBA // --}}


<x-layouts.app 

title="Contacto"
>

    {{-- <x-slot name="title">
        contacto Title
    </x-slot> --}}
    
    
    <h1>Contacto</h1>
</x-layouts.app>