<!DOCTYPE html>
<!-- 
Consumimos un servicio creado en Laravel. Para que funcione debemos entrar en la carpeta del proyecto de Laravel 'laravel-api' y
desde consola lanzar el comando: php artisan serve
Esto habilitará el servicio en el puerto 8000 en la ruta: http://localhost:8000/api/articles
Ver ejemplos de uso en esta página.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
//------------------------------------------------------------------------------------------
//        //Haciendo una petición GET: para obtener todos los artículos.
//        $ch = curl_init("http://localhost:8000/api/articles");
//        //a true, obtendremos una respuesta de la url, en otro caso, 
//        //true si es correcto, false si no lo es
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        //establecemos el verbo http que queremos utilizar para la petición
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
//        //Obtenemos la respuesta en cualquier caso.
//        $response = curl_exec($ch);
//        // Se cierra el recurso CURL y se liberan los recursos del sistema
//        curl_close($ch);
//        if (!$response) {
//            return false;
//        } else {
//            echo '<br>';
//            //var_dump($response);
//            //Decode JSON
//            $data = json_decode($response, true);
//            foreach ($data as $cod => $emp) {
//                echo 'ID: ' . $emp['id'] . '<br>';
//                echo 'Título: ' . $emp['title'] . '<br>';
//                echo 'Cuerpo: ' . $emp['body'] . '<br>';
//            }
//        }
//------------------------------------------------------------------------------------------
//        //Haciendo una petición GET: para obtener un artículo concreto.
        $ch = curl_init("http://localhost:8000/api/articles/99");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $response = curl_exec($ch);
        curl_close($ch);
        $respuesta = json_decode($response, true);
        //var_dump($respuesta);
        if ($respuesta['errors'][0]['code'] == 404) {
            echo $respuesta['errors'][0]['message'];
        } else {
            echo 'ID: ' . $respuesta['id'] . '<br>';
            echo 'Título: ' . $respuesta['title'] . '<br>';
            echo 'Cuerpo: ' . $respuesta['body'] . '<br>';
        }
//------------------------------------------------------------------------------------------
//          //Haciendo una petición POST: para insertar un artículo.        
//        $data = ['title' => 'Mas articulo',
//            'body' => 'Nuevo cuerpo de más articulo'];
//        $ch = curl_init("http://localhost:8000/api/articles/");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
//        $response = curl_exec($ch);
//        curl_close($ch);
//        if ($respuesta['errors'][0]['code'] == 404) {
//            echo $respuesta['errors'][0]['message'];
//        } else {
//            echo $response;
//        }
//------------------------------------------------------------------------------------------
//          //Haciendo una petición PUT: para modificar un artículo.        
//        $data = ['title' => 'Título cambiado',
//            'body' => 'Cuerpo del artículo cambiado'];
//        $ch = curl_init("http://localhost:8000/api/articles/54");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
//        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
//        $response = curl_exec($ch);
//        curl_close($ch);
//        var_dump($response);
//        $respuesta = json_decode($response, true);
//        var_dump($respuesta);
//        if ($respuesta['errors'][0]['code'] == 404) {
//            echo $respuesta['errors'][0]['message'];
//        } else {
//            echo $response;
//        }
//------------------------------------------------------------------------------------------
//          //Haciendo una petición DELETE: para borrar un artículo.        
//        $ch = curl_init("http://localhost:8000/api/articles/45");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
//        $response = curl_exec($ch);
//        curl_close($ch);
//        var_dump($response);
//        $respuesta = json_decode($response, true);
//        var_dump($respuesta);
//        if ($respuesta['errors'][0]['code'] == 404) {
//            echo $respuesta['errors'][0]['message'];
//        } else {
//            echo $response;
//        }
        ?>
    </body>
</html>
