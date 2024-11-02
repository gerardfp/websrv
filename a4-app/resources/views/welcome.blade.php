@include('topbar')

<div>
    @foreach ($noticias as $noticia)
        <div style="display: grid; grid-template-columns: 1em 1fr; gap: 0.5em; align-items: center">
            <form method=POST action="/vote/{{ $noticia->id }}" style="margin: 0; display: inline">
                @csrf
                <a><input type="submit" class="triangle" value="bbb"/></a>
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
            </div>
        </div>
    @endforeach

    @if ($noticias->hasMorePages()) 
        <a href="{{ $noticias->nextPageUrl() }}" rel="next">More</a> 
    @endif
    </div>