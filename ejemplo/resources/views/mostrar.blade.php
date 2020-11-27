<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mostrar datos</title>
    </head>
    <body>
        <?php
        echo 'En la sesión: ' . \Session::get('ses') . '<br>';
        echo 'Otra sesión: ' . session()->get('otrases') . '<br>';
        if (session()->has('otrases')) {
            echo 'Borrando la variable de sesión.' . '<br>';
            session()->forget('otrases');
            if (!session()->has('otrases')) {
                echo 'Ya no existe' . '<br>';
            }
            echo 'Id de la sesión: ' . session()->getId() . '<br>';
            echo 'Borrando todas...' . '<br>';
            //session()->regenerate();
            session()->flush();
            echo 'Id de la sesión: ' . session()->getId() . '<br>';
            if (!session()->has('ses')){
                echo 'ses ya no existe'.'<br>';
            }
        }
        ?>
        <?php
        var_dump($nombre);
        var_dump($numero);
        foreach ($numero as $n) {
            echo ($n + 10) . '<br>';
        }
        ?><br>

        <a href="indice">Volver</a>
    </body>
</html>
