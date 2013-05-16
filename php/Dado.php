<?php

// En PHP se puede incluir la clase en cualquier archivo,
// pero lo recomendable es declararla en un archivo aparte.

class Dado
{

    // Declaramos la propiedad $caras

    public $caras;

    // Declaramos el método tirar, el mismo devuelve un
    // número al azar entre 1 y el valor de caras.

    public function tirar()
    {
        return mt_rand(1, $this->caras);
    }
}
