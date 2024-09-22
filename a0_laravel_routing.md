# Basic laravel routing

Desenvolupa una aplicació per a gestionar **comentaris**. Haurà de permetre les operacions CRUD bàsiques.

* La persistència de comentaris es realitzarà en la `sessió`, en un array s'strings. https://laravel.com/docs/11.x/session
* Desactiva la protecció CSRF. https://laravel.com/docs/11.x/csrf#csrf-excluding-uris
* Cada ruta cridarà a un mètode diferent d'un controller anomenat `CommentController`. https://laravel.com/docs/11.x/controllers#basic-controllers
* Afegeix, també, les comandes **cURL** per a realitzar les peticions. https://stackoverflow.com/questions/50231945/how-to-get-session-id-from-curl-and-reuse-it-again-for-next-get-request

L'app ha de tenir les següents 7 rutes:
```
GET         /comments
GET         /comments/create
POST        /comments
GET         /comments/{commentid}
GET         /comments/{commentid}/edit
PATCH       /comments/{commentid}
DELETE      /comments/{commentid}
```

## `GET /comments`

Crida al mètode `index()` del `CommentController`.

Retorna l'array commentaris.

## `GET /comments/create`

Crida al mètode `create()`.

Retorna un formulari HTML per a crear commentaris. Aquest formulari tindrà un camp de text i un submit. Haurà de fer una acció POST a la ruta `/comments`

## `POST /comments`

Crida al mètode `store(Request $request)`.

Afegirà el 'comment' de la petició a l'array de comentaris.

Retornarà l'array de comentaris.

## `GET /comments/{commentid}`

Crida al mètode `show(string $commentid)`

Retornarà el comentari de l'array que estiga en la posició especificada en el `{commentid}` de la petició

## `GET /comments/{commentid}/edit`

Crida al mètode `edit(string $commentid)`

Retornarà un formulari HTML per a editar un comentari. Haurà de fer una acció PATCH a `/comments/{commentid}` (***, triple asterisc)

## `PATCH /comments/{commentid}`

Crida al mètode `update(Request $request, string $commentid)`.

Modifica el comentari que està en la posició `{commentid}` de l'array.
Retorna l'array de comentaris

## `DELETE /comments/{commentid}`

Crida al mètode `destroy(string $commentid)`

Elimina de l'array el comentari en la posició `{commentid}`
Retorna l'array de comentaris.
