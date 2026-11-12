

<?php

require "datos.php";



$alumno = "Laura Martín";

$notaServidor   = 7;     // Desarrollo Web en Entorno Servidor
$notaCliente    = 6.5;   // Desarrollo Web en Entorno Cliente
$notaDespliegue = 8;     // Despliegue de Aplicaciones Web
$notaInterfaces = 1;     // Diseño de Interfaces Web
$notaEmpresa    = 9;     // Empresa e Iniciativa Emprendedora






function notaMedia(...$varios){
$suma=0;
foreach($varios as $nota){
$suma+=$nota;

}
    
return $suma / count($varios);






}


$media=notaMedia($notaServidor,  
$notaCliente ,  
$notaDespliegue,
$notaInterfaces,
$notaEmpresa   );
echo number_format($media,2);

    
function calificacionMedia($media){

    $calificacion;
switch (true) {
    case $media<5:
        $calificacion = "Insuficiente";
        return $calificacion;
    case $media>=5 && $media<6:
        $calificacion = "suficiente";
        return $calificacion;
    case $media>=6 && $media<7:
        $calificacion = "bien";
        return $calificacion;
    case $media>=7 && $media<9:
        $calificacion = "notable";
        return $calificacion;
    
    default:
        $calificacion = "sobresaliente";
       return $calificacion;
}

}

$calificacion = calificacionMedia($media);
echo $calificacion;






function resultadoDelCurso($media , ...$varios){
    $pendiente=false;
    $suspendido=false;
    $resultado;
    
        foreach($varios as $nota){
        if ($nota < 5 && $media>=5 && $nota>=4) {
            $resultado="Pendiente";
            $pendiente = true;
            

            
        }elseif($nota < 5  ){
            return $resultado="Suspenso";
            
        }elseif($nota>5 && !$pendiente ) {
            $resultado = "Aprobado";
        }
        
        }
        return $resultado;


    

}

function numeroDeModulos(...$varios){
    $numero = 0;
    foreach($varios as $nota){
        if ($nota<5 ) {
            $numero+=1;
        }
    }
    return $numero;
}




function mayor(...$varios){

$mayor = $varios[0];
$Nmayor = "Desarrollo Web en Entorno Servidor";
if ($mayor < $varios[1]) {
        $mayor = $varios[1];
        $Nmayor = "Desarrollo Web en Entorno Cliente";
}
if ($mayor < $varios[2]) {
      $mayor = $varios[2];
        $Nmayor = "Despliegue de Aplicaciones Web";
    # code...
}

if ($mayor < $varios[3]) {
      $mayor = $varios[3];
        $Nmayor = "Diseño de Interfaces Web";
 
}

if ($mayor < $varios[4]) {
      $mayor = $varios[4];
        $Nmayor = "Empresa e Iniciativa Emprendedora";

}

return [$mayor,$Nmayor];

}

function menor(...$varios){

$menor = $varios[0];
$nMenor = "Desarrollo Web en Entorno Servidor";
if ($menor > $varios[1]) {
        $menor = $varios[1];
        $nMenor = "Desarrollo Web en Entorno Cliente";
}
if ($menor > $varios[2]) {
      $menor = $varios[2];
        $nMenor = "Despliegue de Aplicaciones Web";
    # code...
}

if ($menor > $varios[3]) {
      $menor = $varios[3];
        $nMenor = "Diseño de Interfaces Web";
 
}

if ($menor > $varios[4]) {
      $menor = $varios[4];
        $nMenor = "Empresa e Iniciativa Emprendedora";

}

return [$menor,$nMenor];

}



$modulos=numeroDeModulos($notaServidor,  
$notaCliente ,  
$notaDespliegue,
$notaInterfaces,
$notaEmpresa   );


$resultado=resultadoDelCurso($notaServidor,  
$notaCliente ,  
$notaDespliegue,
$notaInterfaces,
$notaEmpresa   );




[$mayor,$nMayor]=mayor($notaServidor,  
$notaCliente ,  
$notaDespliegue,
$notaInterfaces,
$notaEmpresa   );
[$menor,$nMenor]=menor($notaServidor,  
$notaCliente ,  
$notaDespliegue,
$notaInterfaces,
$notaEmpresa   );







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   
<table border=1px>

<tr>
    <th>nombre</th>
    <th>nota</th>

</tr>
<tr>
    <td>Desarrollo Web en Entorno Servidor</td>
    <td class = "<?= $notaServidor >5 ? "aprobado":"suspenso" ?>" > <?= $notaServidor ?></td>
</tr>
<tr>
    <td>Desarrollo Web en Entorno Cliente</td>
       <td class = "<?= $notaCliente >5 ? "aprobado":"suspenso" ?>" > <?= $notaCliente ?></td>

</tr>
<tr>
    <td>Despliegue de Aplicaciones Web</td>
       <td class = "<?= $notaDespliegue >5 ? "aprobado":"suspenso" ?>" > <?= $notaDespliegue ?></td>

</tr>
<tr>
    <td>Diseño de Interfaces Web</td>
        <td class = "<?= $notaInterfaces >5 ? "aprobado":"suspenso" ?>" > <?= $notaInterfaces ?></td>

</tr>
<tr>
    <td>Empresa e Iniciativa Emprendedora</td>
    <td class = "<?= $notaEmpresa >5 ? "aprobado":"suspenso" ?>" > <?= $notaEmpresa ?></td>
    
    
</tr>
<tr>
        <td>nota media</td>
        <td><?= $media ?> </td>

</tr>
<tr><td>modulos suspensos </td>
<td><?= $modulos ?> </td>
 </tr>
 <tr>
    <td>nota mas alta </td>
    <td><?= $nMayor . " nota: " . $mayor ?></td>


        
 </tr>
 <tr>
    <td>nota mas baja </td>
    <td>
        <?= $nMenor . "nota: " . $menor ?>
    </td>

    
 </tr>
    <tr>
        <td>Resultado del curso</td>
        <td class=" <?= $resultado =="Pendiente" ? "suspenso":($resultado=="Aprobado" ? "aprobado":"suspenso") ?> "><?= $resultado?></td> 
    </tr>



</table>

</body>
</html>