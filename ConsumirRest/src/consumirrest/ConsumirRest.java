/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package consumirrest;

import com.google.gson.Gson;
import com.google.gson.reflect.TypeToken;
import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.List;

/**
 *
 * @author faranzabe
 */
public class ConsumirRest {

    /**
     * Librerías GSON
     * https://search.maven.org/artifact/com.google.code.gson/gson/2.8.6/jar
     * Descargar jar, javadoc y source e incluirlos en una linrería Gson en NB.
     * 
     * Esta aplicación solicita los datos que sirve el servicio WEB que se detalla en la URL. Los datos se obtendrán en JSON y se
     * convertirán en objetos usando Gson. La solicitud de los datos se hace con el método GET (ver aplicación EjemploGF --> ServicioDatos).
     * Una vez que tengamos los datos que nos sirven en objetos podremos hacer lo que queramos con ellos (Listas, BD,...).
     *
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        try {
            //Comenta la línea que quieras probar. Recuerda comentar/descomentar el bloque de abajo (bloque LECTURA).
            //URL url = new URL("http://localhost:8080/EjemploGF/app/ServicioDatos/2"); //--> Ejemplo 1
            //URL url = new URL("http://localhost:8080/EjemploGF/app/ServicioDatos");     //--> Ejemplo 2
            //URL url = new URL("http://localhost:8080/EjemploGF/app/ServicioDatos/otro?id=3"); //--> Ejemplo 3
            //URL url = new URL("http://localhost/EjemplosLaravel/ejemploBBDD/public/servicioWEB");
            URL url = new URL("http://localhost/EjemplosLaravel/ejemploBBDD/public/servicioWEBdatosRuta/1A");
            
            HttpURLConnection conn = (HttpURLConnection) url.openConnection();
            conn.setRequestMethod("GET");
            conn.setRequestProperty("Accept", "application/json");
            if (conn.getResponseCode() != 200) {
                throw new RuntimeException("Failed : HTTP Error code : "
                        + conn.getResponseCode());
            }
            InputStreamReader in = new InputStreamReader(conn.getInputStream());
            BufferedReader br = new BufferedReader(in);
            String output;
            while ((output = br.readLine()) != null) {
                System.out.println(output);
                //A continuación comentar o descomentar cada bloque según el ejemplo que estemos practicando.
                //bloque LECTURA.
                //Un objeto //--> Para el ejemplo 1 y 3.
//                Gson gson = new Gson();
//                Datos dato = gson.fromJson(output, Datos.class);
//                System.out.println(dato);

                //Lista de objetos //--> Para el ejemplo 2.
                Gson gson = new Gson();
                List<Datos> listDatos = gson.fromJson(output, new TypeToken<List<Datos>>() {
                }.getType());
                if (listDatos != null) {
                    for (Datos object : listDatos) {
                        System.out.println(object);
                    }
                }
                
            }
            conn.disconnect();

        } catch (Exception e) {
            System.out.println("Exception in NetClientGet:- " + e);
        }
    }

}
