# Laravel Pagination

https://laravel.com/docs/11.x/pagination

Crea una app para mostrar noticias.

* Las noticias tienen que tener:
  * Titulo
  * Resumen
  * Cuerpo
* Crea 300 noticias usando un Factory con datos faker: https://fakerphp.org/formatters/text-and-paragraphs/
  * Titulo: Frase
  * Resumen: Párrafo
  * Cuerpo: 5 Párrafos
* Rutas
  * `/`  Muestra las noticias, paginadas de 15 en 15
  * `/search/{term}` muestra las noticias que contienen el `{term}` paginadas de 15 en 15
  * `/view/{noticia_id}` muestra la noticia con ese `noticia_id`
 
## Crear el proyecto

`curl -s "https://laravel.build/a3-app?with=mysql" | bash`

## Iniciar

`vendor/bin/sail up`

## Crear el modelo

1. `vendor/bin/sail php artisan make:model Noticia --all`

2. Programar el `Migration`, `Factory` y `Seeder`

3. `vendor/bin/sail php artisan migrate:fresh --seed`

## Programar rutas, controlador y vistas
