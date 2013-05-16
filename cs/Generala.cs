
using System;
 
public class Generala 
{
    static public void Main ()
    {

        // Creamos una instancia de la clase Dado en la variable
        // dado y luego le establecemos la cantidad de caras en 6.

        Dado dado = new Dado();
        dado.caras = 6;

        // Declaramos la variable valor

        int valor;

        
        for (int i = 0; i < 20; i++) {

            // Llamamos al método tirar del objeto dado.
            // Establecemos el resultado de tirar en valor.

            valor = dado.tirar();

            // Imprimimos en pantalla el número de fila y el valor.

            Console.WriteLine (i + ": " + valor);
        }
    }
 
}
