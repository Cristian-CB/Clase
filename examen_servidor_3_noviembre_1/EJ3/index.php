<?php

require "datos.php";





function evento($evento){
$estado;
$pocasPlazas = $evento["aforo"] - $evento["aforo"]*15/100;
    if( $evento["aforo"]==$evento["vendidas"]){
        return $estado = "agotado";
    }
    elseif( $pocasPlazas>=$evento["vendidas"]){
       return $estado = "pocas unidades ";}
        
    
    else{
        $estado="disponibles";
        return $estado;}

}








$texto = $_GET["q"];
$categoria = $_GET["categoria"];
$eventosFiltrados = [];

foreach($eventos as $evento){
if(

($texto== ""||stripos($evento["titulo"],$texto)!==false) &&
($categoria=="todas"||$evento["categoria"]==$categoria)){
    $eventosFiltrados[]= $evento;
}




}



?>
<?php require "partials/header.php"; ?>

<main>

<form action="" method="get">

<input type="text" name="q" placeholder="busca" value="<?= $_GET['q']?>">

<select name="categoria" >
    <option value="todas" <?= $categoria=="todas" ? "selected" : "" ?> >todas</option>
    <option value="cine"   <?= $categoria=="cine" ? "selected" : "" ?>>cine</option>
    <option value="teatro">teatro</option>
    <option value="deporte">deporte</option>
</select>


<button type="submit">Buscar</button>


</form>
    





<section>

<?php
if (!empty($eventosFiltrados)) {
    # code...

foreach($eventosFiltrados as $evento){

require "partials/tarjeta.php";


}
}
else {
    echo "no cumplen requisitos";
}
?>


</section>
</main>

<?php require "partials/footer.php"; ?>
