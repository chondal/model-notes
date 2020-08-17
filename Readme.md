# Model Notes

Mostrar y crear notas en multiples modelos en laravel.

## Instalación

```bash
composer require chondal/model-notes
```
Luego ejecutar migraciones para migrar la tabla "notes"

## Dependencias

Este paquete utiliza el siguiente paquete

```bash
composer require laracasts/flash
```

## Como usarlo

Publicar el archivo de configuración llamado notes.php
Configurar el modelo que va a ser el autor de las notas, por lo general será el modelo user.

En los modelos que usarán las notas, usar el trait HasNotes proveniente con el paquete.

Ejemplo:

    use SoftDeletes;
    use HasNotes;

    protected $guarded = [];

Cuando quiera mostrar las notas en un modelo, por ejemplo en la pantalla de edición del mismo, puede hacerlo llamando al siguiente método.

{{ ModelNotes::card($model) }}

donde $model, es la instancia actual del modelo que desea ver.

Esto listará las notas y ofrecerá un modal para poder agregar notas al modelo, puede publicar las vistas para poder modificarlas a su gusto.

## Capturas

![alt text](https://res.cloudinary.com/dchaozfok/image/upload/v1597698708/imhr9vtnikwkmtmbxtsd.png)
![alt text](https://res.cloudinary.com/dchaozfok/image/upload/v1597698708/i1xfqgmgknh6gxaw4qxc.png)

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)