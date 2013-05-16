
// Debemos importar el namespace System para poder usar la clase Random

using System;

public class Dado
{

    // Declaramos la propiedad caras de tipo entero

    public int caras;

    // Declaramos el método tirar, el mismo devuelve un
    // número al azar entre 1 y el valor de caras.

    public int tirar()
    {
        Random rand = new Random();
        return rand.Next(1, caras);        
    }
}
