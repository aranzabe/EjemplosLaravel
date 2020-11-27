<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Formulario inicial</title>
    </head>
    <body>
        
        <form action="validar" method="POST" name="formulario">
            {!! csrf_field(); !!}
            <input type="text" name="nombre[]" value="" placeholder="Escribe...."><br>
            <input type="text" name="nombre[]" value="" placeholder="Escribe...."><br>
            <input type="number" name="num[]" value="0"><br>
            <input type="number" name="num[]" value="0"><br>
            <input type="number" name="num[]" value="0"><br>
            <input type="submit" name="aceptar" value="Aceptar"><br>
        </form>
        
    </body>
</html>
