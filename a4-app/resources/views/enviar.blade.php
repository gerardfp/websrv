<h1>Enviar noticia</h1>
<form method=POST action="/store">
    @csrf
    <input name="titulo" placeholder="Título" size=64/>
    <br />
    <textarea name="cuerpo" placeholder="Cuerpo" rows=6 cols=72></textarea>
    <br />
    <input name="enlace" placeholder="Enlace" size=64/>
    <br />
    <input type="submit" value="Enviar" />
</form>