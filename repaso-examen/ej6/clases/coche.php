<?php


/*




## Ejercicio 6

Crea una clase para gestionar un catálogo de coches. La estructura es:

```
/ejercicio6
├── index.php
└── classes/
    └── Coche.php
```

La clase `Coche` debe tener propiedades privadas: `id`, `marca`, `modelo`, `precio`, `kilometros`, `disponible`.

Implementa:

- Constructor que reciba todas las propiedades
- Getters para todas las propiedades
- Setter para `precio` — solo acepta valores mayores que 0
- Setter para `kilometros` — solo acepta valores mayores o iguales a 0
- Método `esNuevo()` — devuelve `true` si los kilómetros son 0
- Método `aplicarDescuento($porcentaje)` — devuelve el precio con el descuento aplicado
- Método `filter($criterio)` que acepte:
    - `"disponible"` — true si el coche está disponible
    - `"nuevo"` — true si los kilómetros son 0
    - `"oferta"` — true si el precio es menor o igual a 15000
    - El nombre de una marca — true si la marca coincide
- Método `pintarTarjeta()` — genera el HTML de la tarjeta del coche

En `index.php` crea un array con mínimo 6 objetos `Coche` y muestra cuatro secciones usando `filter()`:

*/
class coche{
private $id;
private $marca ;
private $modelo ;
private $precio ;
private $kilometros ;
private $disponible ; 

 public function __construct(
 $id,
 $marca,
 $modelo,
 $precio,
 $kilometros,
 $disponible){
$this-> id= $id;
 $this->marca= $marca;
 $this->modelo= $modelo;
$this->setPrecio($precio);
$this->setKilometros($kilometros);
 $this->disponible= $disponible;
 }
  
    public function getId() {
        return $this->id;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getKilometros() {
        return $this->kilometros;
    }

    public function getDisponible() {
        return $this->disponible;
    }


      public function setPrecio($precio ) {
        if ($precio>0) {
            $this->precio=$precio;
        }
        
    }
        public function setKilometros($kilometros) {
            if ($kilometros>=0) {
                # code...
                $this->kilometros=$kilometros;
            }
        
    }
    public function esNuevo(){
        if ($this->kilometros==0) {
            return true;
            # code...
        }
        else{
            return false;
        }


    }

    public function aplicarDescuento($porcentaje){
        $descuento=$this->precio*$porcentaje/100;
        return $this->precio-$descuento;
    }


    
    // Filtrar coches
    public function filter($criterio) {

        if ($criterio == "disponible") {
            return $this->disponible == true;
        }

        elseif ($criterio == "nuevo") {
            return $this->esNuevo();
        }

        elseif ($criterio == "oferta") {
            return $this->precio <= 15000;
        }

        else {
            return strtolower($this->marca) == strtolower($criterio);
        }

    }


    // Pintar tarjeta
    public function pintarTarjeta($descuento = false) {

        ?>

        <article class="tarjeta">

            <h3><?= $this->marca ?> <?= $this->modelo ?></h3>

            <p><strong>Precio:</strong>

                <?php if ($descuento): ?>

                    <del><?= number_format($this->precio, 2) ?> €</del>

                    <span class="oferta">
                        <?= number_format($this->aplicarDescuento(10), 2) ?> €
                    </span>

                <?php else: ?>

                    <?= number_format($this->precio, 2) ?> €

                <?php endif; ?>

            </p>

            <p><strong>Kilómetros:</strong> <?= number_format($this->kilometros) ?> km</p>

            <p>
                <strong>Disponibilidad:</strong>

                <?php if ($this->disponible): ?>
                    <span class="disponible">Disponible</span>
                <?php else: ?>
                    <span class="no-disponible">No disponible</span>
                <?php endif; ?>

            </p>

            <?php if ($this->esNuevo()): ?>
                <span class="etiqueta">Nuevo</span>
            <?php endif; ?>

        </article>

        <?php
    }

}

?>

