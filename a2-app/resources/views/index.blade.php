<h1>Film:index</h1>
<a href="/films/create">Create new Film</a>

@if(session('success'))
    <p> {{ session('success') }}</p>
@endisset

<ul>
@foreach ($films as $film)
    <li>
        <a href="/films/{{ $film->id }}"><p>{{ $film->title }}</p></a>
        <p>{{ $film->plot }}</p>
        <img src='{{ $film->poster_url }}' style="width: 100px"/></p>
        <p>{{ $film->year }}</p>    
        <p>{{ $film->rating }}</p>    
    </li>
@endforeach
</ul>