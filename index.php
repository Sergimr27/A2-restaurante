<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css Bootstrap -->
    <!-- hoja de estilos -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- título de página -->
    <title>IL DIAVOLO</title>
    <!-- ícono de pàgina -->
    <link rel="shortcut icon" href="./img/diablo.png">
    <!-- fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&family=Rubik+Moonrocks&family=Zen+Maru+Gothic:wght@300&display=swap" rel="stylesheet">
    <!-- javascript Bootstrap-->
   
</head>
<body>
<div class='column-1'>
    <h1>IL DIAVOLO</h1>
    </div>
    <div class='column-2'>
    <h1>Menú</h1>
    </div>

<?php

if (file_exists('xml/carta.xml')) {
    $menu = simplexml_load_file('xml/carta.xml');
} else {
    exit('Error abriendo carta.xml.');
}
?>
<?php
echo"<div class='column-4'>";

$aux=[];
foreach($menu->plato as $plato){
    if(!in_array((string)$plato['tipo8'],$aux)){

        echo '<h1>'.$plato['tipo8'].'</h2>'; 

    /*  if(isset($_GET['tipo']) && $_GET['tipo']==(string)$plato['tipo']){
            echo $plato['tipo'];
        } */
        array_push($aux,(string)$plato['tipo8']);
    }
    if($plato['tipo8']=='Entrantes'){
        echo $plato->title.'............................ '.$plato->precio;;
        echo "<br>";
        echo $plato->description;
        echo "<br>";
        echo $plato->calorias;
        echo "<br>";
        echo "<br>";
        if(isset($plato->caracteristicas->item['tema'])==(string)'carne'){
            echo '<img src="img/carne.svg" alt="">';
            }
    }

   
}
echo"</div>";
echo"<div class='column-4'>";
$aux=[];
foreach($menu->plato as $plato){
    if(!in_array((string)$plato['tipo9'],$aux)){

        echo '<h1>'.$plato['tipo9'].'</h2>'; 

    /*  if(isset($_GET['tipo']) && $_GET['tipo']==(string)$plato['tipo']){
            echo $plato['tipo'];
        } */
        array_push($aux,(string)$plato['tipo9']);
    }
    if($plato['tipo9']=='Pizzas'){
        echo $plato->title.'............................ '.$plato->precio;;
        echo "<br>";
        echo $plato->description;
        echo "<br>";
        echo $plato->calorias;
        echo "<br>";
        echo "<br>";
    }

   
}
echo"</div>";
echo"<div class='column-4'>";
foreach($menu->plato as $plato){
    if(!in_array((string)$plato['tipo12'],$aux)){

        echo '<h1>'.$plato['tipo12'].'</h2>'; 

    /*  if(isset($_GET['tipo']) && $_GET['tipo']==(string)$plato['tipo']){
            echo $plato['tipo'];
        } */
        array_push($aux,(string)$plato['tipo12']);
    }
    if($plato['tipo12']=='Hamburguesas'){
        echo $plato->title.'....................... '.$plato->precio;;
        echo "<br>";
        echo $plato->description;
        echo "<br>";
        echo $plato->calorias;
        echo "<br>";
        echo "<br>";
    }

   
}
echo"</div>";
echo"<div class='column-6'>";
$aux=[];
foreach($menu->plato as $plato){
    if(!in_array((string)$plato['tipo10'],$aux)){

        echo '<h1>'.$plato['tipo10'].'</h2>'; 

    /*  if(isset($_GET['tipo']) && $_GET['tipo']==(string)$plato['tipo']){
            echo $plato['tipo'];
        } */
        array_push($aux,(string)$plato['tipo10']);
    }
    if($plato['tipo10']=='Pastas'){
        echo $plato->title.'............................ '.$plato->precio;;
        echo "<br>";
        echo $plato->description;
        echo "<br>";
        echo $plato->calorias;
        echo "<br>";
        echo "<br>";
    }

   
}
$aux=[];
echo"</div>";

echo"<div class='column-6'>";
foreach($menu->plato as $plato){
    if(!in_array((string)$plato['tipo11'],$aux)){

        echo '<h1>'.$plato['tipo11'].'</h2>'; 

    /*  if(isset($_GET['tipo']) && $_GET['tipo']==(string)$plato['tipo']){
            echo $plato['tipo'];
        } */
        array_push($aux,(string)$plato['tipo11']);
    }
    if($plato['tipo11']=='Ensaladas'){
        echo $plato->title.'............................ '.$plato->precio;;
        echo "<br>";
        echo $plato->description;
        echo "<br>";
        echo $plato->calorias;
        echo "<br>";
        echo "<br>";
    }
 
}
echo"</div>";


echo"<div class='column-5'>";
foreach($menu->plato as $plato){
    if(!in_array((string)$plato['tipo13'],$aux)){

        echo '<h1>'.$plato['tipo13'].'</h2>'; 

    /*  if(isset($_GET['tipo']) && $_GET['tipo']==(string)$plato['tipo']){
            echo $plato['tipo'];
        } */
        array_push($aux,(string)$plato['tipo13']);
    }
    if($plato['tipo13']=='Sin gluten'){
        echo $plato->title.'....................... '.$plato->precio;;
        echo "<br>";
        echo $plato->description;
        echo "<br>";
        echo $plato->calorias;
        echo "<br>";
        echo "<br>";
    }

   
}
echo"</div>";
echo"<div class='column-5'>";
foreach($menu->plato as $plato){
    if(!in_array((string)$plato['tipo14'],$aux)){

        echo '<h1>'.$plato['tipo14'].'</h2>'; 

    /*  if(isset($_GET['tipo']) && $_GET['tipo']==(string)$plato['tipo']){
            echo $plato['tipo'];
        } */
        array_push($aux,(string)$plato['tipo14']);
    }
    if($plato['tipo14']=='Postres'){
        echo $plato->title.'............................ '.$plato->precio;;
        echo "<br>";
        echo $plato->description;
        echo "<br>";
        echo $plato->calorias;
        echo "<br>";
        echo "<br>";
    }

   
}
echo"</div>";
echo"<div class='column-5'>";
foreach($menu->plato as $plato){
    if(!in_array((string)$plato['tipo15'],$aux)){

        echo '<h1>'.$plato['tipo15'].'</h2>'; 

    /*  if(isset($_GET['tipo']) && $_GET['tipo']==(string)$plato['tipo']){
            echo $plato['tipo'];
        } */
        array_push($aux,(string)$plato['tipo15']);
    }
    if($plato['tipo15']=='Infantil'){
        echo $plato->title.'............................ '.$plato->precio;;
        echo "<br>";
        echo $plato->description;
        echo "<br>";
        echo $plato->calorias;
        echo "<br>";
        echo "<br>";
    }

   
}
if(isset($plato->caracteristicas->item['tema'])==(string)'carne'){
    echo '<img src="img/carne.svg" alt="">';
    }
if(isset($plato->caracteristicas->item['tema1'])==(string)'picante'){
    echo '<img src="img/picante.svg" alt="">';
}
if(isset($plato->caracteristicas->item['tema2'])==(string)'estrella'){
    echo '<img src="img/estrella.svg" alt="">';
}
/* foreach($menu->plato as $plato){
    echo $plato->title.'............................ '.$plato->precio;;
    echo "<br>";
    echo $plato->description;
    echo "<br>";
    echo $plato->calorias;
    echo "<br>";
    echo "<br>";
} */
?>
</body>
</html>

