# Laravel Model

Crea una aplicacion CRUD con un modelo: 

* Utiliza un **Resource Controller** para definir las rutas: https://laravel.com/docs/11.x/controllers#resource-controllers

* Genera el modelo usando `artisan`: https://laravel.com/docs/11.x/eloquent#generating-model-classes 
  * Define la `Migration` con distintos tipos de datos: https://laravel.com/docs/11.x/migrations#columns
  * Define el `Factory` con los valores por defecto a los campos del modelo: https://laravel.com/docs/11.x/eloquent-factories#introduction
  * Crea un `Seeder` para introducir datos en la base de datos: https://laravel.com/docs/11.x/seeding#using-model-factories
    
  * Crea distintas reglas de validación en la `StoreRequest` y `UpdateRequest`: https://laravel.com/docs/11.x/validation#form-request-validation
  * Muestra los errores de validación en los formularios `create` y `edit`: https://laravel.com/docs/11.x/validation#quick-displaying-the-validation-errors 

  * Desactiva la autorización de las Request: https://laravel.com/docs/11.x/validation#authorizing-form-requests
