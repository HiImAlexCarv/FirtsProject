<x-layouts.app

:title="$post->title"
>

<h1>Editar formulario</h1>
<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf @method('PATCH')
    <label>
        Title <br>
    <input name="title" type="text" value="{{ old('title', $post->title)}}">
    <br>
    @error('title')
        <small style="color:red">{{ $message}}</small>
    @enderror

    </label><br>



    <label>
        Body <br>
    <textarea name="body">{{ old('body',$post->body)}}</textarea>
    <br>
    @error('body')
        <small style="color:red">{{ $message}}</small>
    @enderror
    </label><br>

    <button type="submit">Enviar</button>
    <br>
</form>
<br>

<a href="{{ route('posts.index')}}">Regresar</a>

</x-layouts.app>
