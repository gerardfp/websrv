<h1>Film:edit</h1>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action='/films/{{ $film->id }}'>
    @csrf
    @method('PUT')
    <input name='title' value='{{ $film->title }}'>
    <input name='plot' value='{{ $film->plot }}'>
    <input name='poster_url' value='{{ $film->poster_url }}'>
    <input name='year' value='{{ $film->year }}'>
    <input name='rating' value='{{ $film->rating }}'>
    <input type='submit' />
</form>
