<?php

namespace App\Http\Controllers;

Use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller {

    public function prueba(){
        echo 'Hola';
    }
    
    public function index() {
        return Article::all();
    }

    public function show($article) {
        // Comprobamos si el artículo existe.
        $articulo = Article::find($article);

        // Si no existe ese artículo devolvemos un error.
        if (!$articulo) {
            // Se devuelve un array errors con los errores encontrados y cabecera HTTP 404.
            // En code podríamos indicar un código de error personalizado de nuestra aplicación si lo deseamos.
            return response()->json(['errors' => array(['code' => 404, 'message' => 'No se encuentra un artículo con ese código ' . $article])], 404);
        }

        return $articulo;
    }

    public function store(Request $request) {
        $article = Article::create($request->all());

        return response()->json(['code' => 201, 'message' => 'Datos insertados: ' . $article], 201);
        //return response()->json($article, 201);
    }

    public function update(Request $request, $article) {

        // Comprobamos si el artículo existe.
        $articulo = Article::find($article);

        // Si no existe ese artículo devolvemos un error.
        if (!$articulo) {
            // Se devuelve un array errors con los errores encontrados y cabecera HTTP 404.
            // En code podríamos indicar un código de error personalizado de nuestra aplicación si lo deseamos.
            return response()->json(['errors' => array(['code' => 404, 'message' => 'No se encuentra un artículo con ese código.'])], 404);
        }

        $articulo->update($request->all());

        //return response()->json(['status'=>'ok','data'=>$fabricante],200);
        return response()->json($articulo, 200);
    }

    public function delete($article) {
        // Comprobamos si el artículo existe.
        $articulo = Article::find($article);

        // Si no existe ese artículo devolvemos un error.
        if (!$articulo) {
            // Se devuelve un array errors con los errores encontrados y cabecera HTTP 404.
            // En code podríamos indicar un código de error personalizado de nuestra aplicación si lo deseamos.
            return response()->json(['errors' => array(['code' => 404, 'message' => 'No se encuentra un artículo con ese código ' . $article])], 404);
        }

        $articulo->delete();

        // Se usa el código 204 No Content – [Sin Contenido] Respuesta a una petición exitosa que no devuelve un body (como una petición DELETE)
        // Este código 204 no devuelve body así que si queremos que se vea el mensaje tendríamos que usar un código de respuesta HTTP 200.
        return response()->json(['code' => 204, 'message' => 'Artículo ' . $article . ' borrado.'], 200);
    }

}

/*
 Códigos de estado HTTP a utilizar en la API RESTful

HTTP define un set de significativos códigos de status que pueden ser devueltos por la API. Éstos pueden ser nivelados para ayudar a los consumidores de la API dirigir sus respuestas de forma apropiada.

De forma genérica los códigos HTTP que comienzan por los números indicados abajo, tienen el siguiente significado:

    200's usados para respuestas con éxito.
    300's usados para redirecciones.
    400's usados cuando hay algún problema con la petición.
    500's usados cuando hay algún problema con el servidor.

Lista de códigos HTTP que se deberían utilizar en la API RESTful: ---

    200 OK - Respuesta a un exitoso GET, PUT, PATCH o DELETE. Puede ser usado también para un POST que no resulta en una creación.
    201 Created – [Creada] Respuesta a un POST que resulta en una creación. Debería ser combinado con un encabezado Location, apuntando a la ubicación del nuevo recurso.
    204 No Content – [Sin Contenido] Respuesta a una petición exitosa que no devuelve un body (por ejemplo en una petición DELETE)

---

    304 Not Modified – [No Modificada] Usado cuando el cacheo de encabezados HTTP está activo y el cliente puede usar datos cacheados.

---

    400 Bad Request – [Petición Errónea] La petición está malformada, como por ejemplo, si el contenido no fue bien parseado. El error se debe mostrar también en el JSON de respuesta.
    401 Unauthorized – [Desautorizada] Cuando los detalles de autenticación son inválidos o no son otorgados. También útil para disparar un popup de autorización si la API es usada desde un navegador.
    403 Forbidden – [Prohibida] Cuando la autenticación es exitosa pero el usuario no tiene permiso al recurso en cuestión.
    404 Not Found – [No encontrada] Cuando un recurso se solicita un recurso no existente.

---

    405 Method Not Allowed – [Método no permitido] Cuando un método HTTP que está siendo pedido no está permitido para el usuario autenticado.
    409 Conflict - [Conflicto] Cuando hay algún conflicto al procesar una petición, por ejemplo en PATCH, POST o DELETE.
    410 Gone – [Retirado] Indica que el recurso en ese endpoint ya no está disponible. Útil como una respuesta en blanco para viejas versiones de la API
    415 Unsupported Media Type – [Tipo de contenido no soportado] Si el tipo de contenido que solicita la petición es incorrecto
    422 Unprocessable Entity – [Entidad improcesable] Utilizada para errores de validación, o cuando por ejemplo faltan campos en una petición.
    429 Too Many Requests – [Demasiadas peticiones] Cuando una petición es rechazada debido a la tasa límite .

---

    500 – Internal Server Error – [Error Interno del servidor] Los desarrolladores de API NO deberían usar este código. En su lugar se debería loguear el fallo y no devolver respuesta.

--- Más información en: http://jsonapi.org/format/ 
 
 */