<h1>Film:create</h1>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action='/films'>
    @csrf
    <input name='title' placeholder="Title">
    <input name='plot'  placeholder="Plot">
    <input name='poster_url' placeholder="Poster URL">
    <input name='year' placeholder="Year">
    <input name='rating' placeholder="Rating">
    <input type='submit' />
</form>
