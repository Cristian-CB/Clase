
# Ejercicio 3: Gestión de clientes de un banco

## Descripción

Aplicación web desarrollada en PHP para gestionar y consultar clientes de un banco.

Permite visualizar los clientes, buscar por nombre o apellidos y filtrar por tipo de cuenta.

## Estructura del proyecto

```text
EJ3/
├── index.php
├── datos.php
├── README.md
├── assets/
│   └── css/
│       └── styles.css
└── partials/
    ├── header.php
    ├── footer.php
    └── tarjeta.php
```

## Datos de los clientes

Cada cliente contiene los siguientes campos:

- id
- nombre
- apellidos
- tipo
- saldo
- iban
- estado
- movimientos

## Funcionalidades

### 1. Listado de clientes

Muestra los datos de cada cliente mediante tarjetas.

Cada tarjeta contiene:

- Nombre y apellidos.
- Tipo de cuenta.
- IBAN.
- Saldo.
- Número de movimientos.
- Estado de la cuenta.

### 2. Estado de las cuentas

El estado se calcula según las siguientes condiciones:

| Condición | Estado |
|---|---|
| Cuenta bloqueada | Bloqueada |
| Cuenta inactiva | Inactiva |
| Saldo menor o igual a 50 € | Saldo bajo |
| Cualquier otro caso | Operativa |

### 3. Buscador

Dispone de un formulario GET con dos filtros:

- Búsqueda por nombre o apellidos.
- Filtro por tipo de cuenta.

Los filtros se pueden combinar.

Tipos disponibles:

- Todos.
- Ahorro.
- Corriente.
- Empresa.

### 4. Resultados

Si no hay clientes que coincidan con los filtros, aparece un mensaje indicando que no se han encontrado clientes.

Al final del listado aparece un resumen con el número de clientes encontrados y el total.

## Tecnologías utilizadas

- PHP.
- HTML5.
- CSS3.

## Instalación

1. Copiar la carpeta EJ3 dentro de `htdocs` de XAMPP.
2. Iniciar Apache desde el panel de XAMPP.
3. Abrir el navegador.
4. Acceder a:

http://localhost/EJ3/

## Autor

Ejercicio práctico de Desarrollo Web en Entorno Servidor.
