<ul>
    @foreach ($noticias as $noticia)
    <li><a href="/view/{{$noticia->id }}">{{ $noticia->titulo }}</a></li>        @endforeach
</ul>

<p>Se han encontrado {{ $noticias->lastPage()}} paginas.</p>

{{ $noticias->links() }}

@for ($i = 1; $i < $noticias->lastPage(); $i++)
    @if ($i == $noticias->currentPage())
    <a href="?page={{ $i }}" style="color: blue">{{ $i }}</a> &nbsp; 
    @else
    <a href="?page={{ $i }}">{{ $i }}</a> &nbsp; 
    @endif
@endfor

