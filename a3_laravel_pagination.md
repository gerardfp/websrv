# Laravel Pagination


Crea una app para mostrar noticias.

* Las noticias tienen que tener
  * Titulo
  * Resumen
  * Cuerpo
* Crea 300 noticias usando un Factory con datos faker
  * Titulo: Frase
  * Resumen: Parrafo
  * Cuerpo: 5 Parrafos
* Rutas
  * `/`  Muestra las noticias, paginadas de 15 en 15
  * `/search/{term}` muestra las noticias que contienen el `{term}` paginadas de 15 en 15
  * `/view/{noticia_id}` muestra la noticia con ese `noticia_id`
 
### Crear el proyecto

`curl -s "https://laravel.build/a3-app?with=mysql" | bash`

### Iniciar

`vendor/bin/sail up`

### Crear el modelo

`vendor/bin/sail php artisan make:model Noticia --all

Programar el `Migration, `Factory` y `Seeder`

`vendor/bin/sail php artisan migrate:fresh --seed

### Programar rutas, controlador y vistas
