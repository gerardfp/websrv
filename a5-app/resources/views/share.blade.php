<h1>TODO</h1>

@foreach ($ficheros as $fichero)
    <p>{{ $fichero->name }}</p>
@endforeach

<br>

@foreach($users as $user) 
    <p>{{ $user->name }}
@endforeach