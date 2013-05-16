
// Debemos importar la clase Random para poder usarla.

import java.util.Random;

class Dado
{

    // Declaramos la propiedad caras de tipo entero

    public int caras;

    // Declaramos el método tirar, el mismo devuelve un
    // número al azar entre 1 y el valor de caras.

    public int tirar()
    {
        Random rand = new Random();
        return rand.nextInt(caras) + 1;        
    }
}
