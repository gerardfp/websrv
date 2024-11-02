@include('topbar')

<div style="display: grid; grid-template-columns: 1em 1fr; gap: 0.5em; align-items: center">
    <form method=POST action="/vote/{{ $noticia->id }}" style="margin: 0; display: inline">
        @csrf
        <input type="submit" class="triangle" value=""/>
    </form>

    <div>
        <a href="{{ $noticia->enlace }}">{{ $noticia->titulo }}</a>
    </div>
    <div></div>
    <div>
        <p class="graytext">
            {{ count($noticia->votos) }} votes 
            by {{ $noticia->user->name }} {{ $noticia->created_at }} 
            | <a href="/noticia/{{$noticia->id}}">{{ count($noticia->comentarios) }} comments</a>
        </p>

        <p>{{ $noticia->cuerpo }}</p>
        <br>

        <form method=POST action="/comment/{{ $noticia->id }}">
            @csrf
            <textarea name="text" rows="8" cols="80" wrap="virtual"></textarea>
            <br>
            <br>
            <input type="submit" value="añadir comentario" />
        </form>
    </div>
</div>


@include('comentario', ['comentarios' => $noticia->comentarios])