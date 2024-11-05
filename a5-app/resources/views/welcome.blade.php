<!DOCTYPE html>

<div style="display: flex; background: rgb(221, 100, 100); padding: 8px; align-items: center; gap: 1em;">
    <p style="margin: 0px; margin-right: auto; font-size: xx-large; "><a href="/">♻️ JuanDrive</a></p>
    
    @auth
    
    <form id="uploadform" method="POST" action="/upload"  enctype="multipart/form-data" style="margin:0">
        @csrf
        <label for="inputfile" class="button">Upload</label>
        <input id="inputfile" name="uploaded_file" style="display:none" type="file" onchange="uploadform.submit()" />
    </form>

    <p>{{ Auth::user()->name }} | <a href="/logout">Logout</a></p>
    
    @else
    
    <p><a href="/login">Login</a></p>
    
    @endauth
</div>

<div style="padding: 1em">
    <form action=/share>
        <table>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>Nombre</th>
                <th>Propietario</th>
                <th>Tamaño</th>
                <th>Creado</th>
                <th>Modificado</th>
            </tr>
            @foreach ($ficheros as $fichero)
            <tr>
                <td><input type="checkbox" name="ficheros_ids[{{ $fichero->id }}]"/></td>
                <td><a href="/share?ficheros_ids[{{ $fichero->id}}]=on" class="button">👥</a></td>
                <td><a href="/edit?ficheros_ids[{{ $fichero->id}}]=on" class="button">✏️</a></td>
                <td><a href="/delete?ficheros_ids[{{ $fichero->id}}]=on" class="button">🗑</a></td>
                <td><a href="/download/{{$fichero->id}}">{{ $fichero->name }}</a></td>
                <td>{{ $fichero->user->name}}</td>
                <td>{{ $fichero->size() }}</td>
                <td>{{ $fichero->created_at}}</td>
                <td>{{ $fichero->updated_at}}</td>
            </tr>
            @endforeach
        </table>
        
        <div class="with_selected">
            <span>Selected:</span>
            <input type="submit" value="👥">
            <input type="submit" value="🗑">
        </div>
    </form>
</div>


<style>
    body {margin:0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif}
    a, a:visited { text-decoration: none;}
    .button {
        background: rgb(255, 255, 255);
        color: rgb(66, 66, 66);
        padding: 0.4em;
        border-radius: 4px;
    }
    table {
        border-collapse: collapse;
    }
    td, th {
        padding: 0.4em 0.8em 0.4em 0;
    }

    tr:has(input:checked) {
        background: rgb(142, 186, 228);
    }

    .with_selected {
        display: none;
        padding-top: 1em;
    }

    input[type=submit], .button {
        font-size: large;
        background: none;
        border: none;
        cursor: pointer;
    }

    form:has(input:checked) .with_selected {
        display: block;
    }
</style>
