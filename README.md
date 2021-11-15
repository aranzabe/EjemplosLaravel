Ejemplos de clase.
Recuerda que para que funcionen, una vez realizado el pull deberás realizar un: composer update (dentro de la carpeta del proyecto).
Tendremos que regenerar la key el proyecto con:

cp .env.example .env           

php artisan key:generate

Finalmente, si estás en Linux, otorga todos los permisos a toda la carpeta del proyecto: chmod 777 -R ejemploXXX

