<h1>Film:show</h1>
<div>
    <p>{{ $film->title }}</p>
    <p>{{ $film->plot }}</p>
    <img src='{{ $film->poster_url }}' style="width: 100px"/></p>
    <p>{{ $film->year }}</p>    
    <p>{{ $film->rating }}</p>
    <a href="/films/{{ $film->id }}/edit">Edit</a>
    <form method="POST" action="/films/{{ $film->id }}">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar"/>
    </form>
</div>