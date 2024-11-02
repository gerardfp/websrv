@foreach ($comentarios as $comentario)
<div style="margin-left: 1.6em; margin-top: 1em;">
    <div style="display: grid; grid-template-columns: 1em 1fr; gap: 0.5em; align-items: center">

        <form method="" action="" style="margin: 0; display: inline">
            @csrf
            <input type="submit" class="triangle graytext" value="a"/>
        </form>

        <div>
            <span style="font-size: small; color: gray;">{{$comentario->user->name}} {{ $comentario->created_at }}</span>
        </div>

        <div>
        </div>

        <div>
            <p>{{$comentario->text}}
            
            <details>
                <summary style="list-style: none; cursor: pointer" class="graytext">reply</summary>
                
                <form method="POST" action="/comment/{{ $noticia->id }}">
                    @csrf
                    <textarea name="text" rows="8" cols="80" wrap="virtual"></textarea>
                    <br>
                    <br>
                    <input name="comentario_id" value="{{ $comentario->id }}" type="hidden" />
                    <input type="submit" value="añadir comentario" />
                
                </form>
            </details>
            @include('comentario', ['comentarios' => $comentario->comentarios])
        </div>
    </div>
</div>
@endforeach