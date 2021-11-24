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
        /*
         * PETICIONES SIN LOGIN NI TOKEN DE ACCESO. SOLO PARA USO DE API REST.
         */
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
//            return 'Acceso denegado';
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
//        $ch = curl_init("http://localhost:8000/api/articles/9");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
//        $response = curl_exec($ch);
//        curl_close($ch);
//        $respuesta = json_decode($response, true);
//        var_dump($respuesta);
//        if ($respuesta == null) {
//            echo 'Petición no autorizada';
//        } else {
//            echo 'ID: ' . $respuesta['id'] . '<br>';
//            echo 'Título: ' . $respuesta['title'] . '<br>';
//            echo 'Cuerpo: ' . $respuesta['body'] . '<br>';
//        }
//------------------------------------------------------------------------------------------
//          //Haciendo una petición POST: para insertar un artículo.        
//        $data = ['title' => 'Un artículo de 19 de enero',
//            'body' => 'Nuevo cuerpo de más articulo de hoy de 19 enero'];
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
//        $data = ['title' => 'Ya acabo',
//            'body' => 'Menuda turra'];
//        $ch = curl_init("http://localhost:8000/api/articles/57");
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
////------------------------------------------------------------------------------------------
//          //Haciendo una petición DELETE: para borrar un artículo.        
//        $ch = curl_init("http://localhost:8000/api/articles/30");
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
//-------------------------------------------------------------------------------------------
//      Registro de un usuario. Esto lo que hace es comprobar que el usuario existe y le genera un token en la bd para dialogar posteriormente.
//        $data = ['name' => 'fernando',
//            'email' => 'faranzabe@gmail.com',
//            'password' => 12345678,
//            'password_confirmation' => 12345678];
//        $ch = curl_init("http://localhost:8000/api/register");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
//        $response = curl_exec($ch);
//        var_dump($response);
//        curl_close($ch);
//        $respuesta = json_decode($response, true);
//        var_dump($respuesta);
//        if ($respuesta['errors'][0]['code'] == 401) {
//            echo $respuesta['errors'][0]['message'];
//        } else {
//            echo $respuesta['access_token'];
//        }
//        
//        
        /*
         * PETICIONES CON LOGIN NI TOKEN DE ACCESO. SOLO PARA USO DE API REST.
         */
//-------------------------------------------------------------------------------------------
//      Realizar un login y luego ya lo que sea: get, post, put, delete....



        $data = [
            'email' => 'faranzabe@gmail.com',
            'password' => 12345678
        ];
        $ch = curl_init("http://localhost:8000/api/login");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $response = curl_exec($ch);
        var_dump($response);
        if ($response) {
            curl_close($ch);
            $respuesta = json_decode($response, true);
            //var_dump($respuesta['code']);
            if ($respuesta['code'] == 400) {
                echo $respuesta['message'];
            } else {
                echo 'Login realizado' . '<br>';
                //echo $respuesta['message']['access_token'];
                // use above token to make further api calls in this session or until the access token expires
                //Haciendo una petición GET: para obtener un artículo concreto.
                $ch = curl_init("http://localhost:8000/api/articles/18");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                $header = array(
                    'Authorization: Bearer ' . $respuesta['message']['access_token']
                );
//            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//                'Content-Type: application/json',
//                'Authorization: Bearer ' . $token
//            ));
                curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                $result = curl_exec($ch);
                curl_close($ch);

                $respuesta = json_decode($result, true);
//            var_dump($respuesta);
                if ($respuesta['code'] == 404) {
                    echo $respuesta['message'];
                } else {
                    echo 'ID: ' . $respuesta['message']['id'] . '<br>';
                    echo 'Título: ' . $respuesta['message']['title'] . '<br>';
                    echo 'Cuerpo: ' . $respuesta['message']['body'] . '<br>';
                }
            }
        } else {
            echo 'Servidor no encontrado <br>';
        }




        //---------------- Realizar un registro a través de la API -------------------
//        $data = [
//            'name' => 'Otro',
//            'email' => 'otro2@gmail.com',
//            'password' => 12345678
//        ];
//        $ch = curl_init("http://localhost:8000/api/register");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
//        $response = curl_exec($ch);
//        var_dump($response);
//        curl_close($ch);
//        $respuesta = json_decode($response, true);
//        var_dump($respuesta['code']);
//        if ($respuesta['code'] == 400) {
//            echo $respuesta['message'];
//        } else {
//            echo 'Registro realizado'.'<br>';
//            echo $respuesta['message']['access_token'];
//        }
        ?>
    </body>
</html>
