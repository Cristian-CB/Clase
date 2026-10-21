
<?php

/*

Propiedades privadas: `id`, `titulo`, `genero`, `precio`, `puntuacion`, `imagen`, `stock`.

Debe tener:

- Constructor que reciba todas las propiedades
- Getters para todas las propiedades
- Setters con validación para `precio` (mayor que 0) y `puntuacion` (entre 0 y 10)
- Método `tieneStock()` — devuelve `true` si el stock es mayor que 0
- Método `aplicarDescuento($porcentaje)` — devuelve el precio con el descuento aplicado
- Método `filter($criterio)` — devuelve `true` o `false` según el criterio:

$juego->filter("recomendado");  // true si puntuacion >= 8
$juego->filter("oferta");       // true si precio <= 20
$juego->filter("disponible");   // true si stock > 0

- Método `pintarTarjeta()` — genera el HTML de la tarjeta del juego. Si el stock es 0 muestra una etiqueta "Sin stock"

*/

class videojuego
{
    private string $id;
    private string $titulo;
    private string $genero;
    private float $precio;
    private string $puntuacion;
    private string $imagen;
    private int $stock;

    /**
     * Get the value of id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of titulo
     *
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @param string $titulo
     *
     * @return self
     */
    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of genero
     *
     * @return string
     */
    public function getGenero(): string
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @param string $genero
     *
     * @return self
     */
    public function setGenero(string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of precio
     *
     * @return float
     */
    public function getPrecio(): float
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @param float $precio
     *
     * @return self
     */
    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        if ($precio > 0) {
            return $this;
        }
    }

    /**
     * Get the value of puntuacion
     *
     * @return int
     */
    public function getPuntuacion(): int
    {
        return $this->puntuacion;
    }

    /**
     * Set the value of puntuacion
     *
     * @param int $puntuacion
     *
     * @return self
     */
    public function setPuntuacion(int $puntuacion): self
    {
        $this->puntuacion = $puntuacion;

        if (0 < $puntuacion && $puntuacion <= 10) {
            return $this;
        }
    }

    /**
     * Get the value of imagen
     *
     * @return string
     */
    public function getImagen(): string
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @param string $imagen
     *
     * @return self
     */
    public function setImagen(string $imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function __construct(
        $id,
        $titulo,
        $genero,
        $precio,
        $puntuacion,
        $imagen,
        $stock
    ) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->precio = $precio;
        $this->puntuacion = $puntuacion;
        $this->imagen = $imagen;
        $this->stock = $stock;
    }

    public function tieneStock()
    {
        if ($stock > 0) {
            echo "true";
        }
    }

    public function aplicarDescuento($porcentaje)
    {   $precio = $this->getPrecio();
        $resultado = ($precio* $porcentaje) / 100;
       $precio-= $resultado;

        $this->setPrecio($precio);
    }

    public function filter($criterio)
    {
        switch ($criterio) {
            case 'recomendado':
                if ($this->getPuntuacion() > 8) {
                    return true;
                } else {
                    return false;
                }
                break;

            case 'oferta':
                if ($this->getPrecio() < 20) {
                    return true;
                } else {
                    return false;
                }
                break;

            case 'disponible':
                if ($stock > 0) {
                    echo true;
                } else {
                    echo false;
                }
                break;

            default:
                echo "no se reconoce el criterio";
                break;
        }
    }

    /**
     * Get the value of stock
     *
     * @return int
     */
    public function getStock(): int
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @param int $stock
     *
     * @return self
     */
    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function pintarTarjeta()
    {
        if ($this->getStock() > 0) {
            ?>
            <div class = "item">
                <img src="<?= $this->getImagen() ?> " alt="imagen">
                <div class ="content">
                    <p> <?= $this->getTitulo()  ?> </p>
                    <p> <?= $this->getGenero()  ?> </p>
                    <p> <?= $this->getStock()  ?> </p>
                </div>
            </div>
            <?php

        } else {
            echo " sin stock ";
        }
    }
}
?>
