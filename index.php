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
    <h2>Menú</h2>
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
        if(isset($plato->caracteristicas->item['tema'])==(string)'carne'){
            echo '<img src="img/carne.svg" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema2'])==(string)'picante'){
            echo '<img src="img/picante.svg" alt="">';
           
        }
        if(isset($plato->caracteristicas->item['tema5'])==(string)'star'){
            echo '<img src="img/star.svg" alt="">';
            
        }
        echo "<br>";
        echo "<br>";
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
        if(isset($plato->caracteristicas->item['tema'])==(string)'carne'){
            echo '<img src="img/carne.svg" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema2'])==(string)'picante'){
            echo '<img src="img/picante.svg" alt="">';
           
        }
        if(isset($plato->caracteristicas->item['tema3'])==(string)'pizza'){
            echo '<img src="img/pizza.svg" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema4'])==(string)'vegetal'){
            echo '<img src="img/vegetal.svg" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema5'])==(string)'star'){
            echo '<img src="img/star.svg" alt="">';
            
        }
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
        echo $plato->title.'.......................'.$plato->precio;;
        echo "<br>";
        echo $plato->description;
        echo "<br>";
        echo $plato->calorias;
        echo "<br>";
        if(isset($plato->caracteristicas->item['tema12'])==(string)'burger'){
            echo '<img src="img/burger.svg" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema'])==(string)'carne'){
            echo '<img src="img/carne.svg" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema4'])==(string)'vegetal'){
            echo '<img src="img/vegetal.svg" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema5'])==(string)'star'){
            echo '<img src="img/star.svg" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema2'])==(string)'picante'){
            echo '<img src="img/picante.svg" alt="">';
           
        }
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
        if(isset($plato->caracteristicas->item['tema6'])==(string)'pasta'){
            echo '<img src="img/pasta.svg" alt="">';
            
        }
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
        if(isset($plato->caracteristicas->item['tema'])==(string)'carne'){
            echo '<img src="img/carne.svg" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema4'])==(string)'vegetal'){
            echo '<img src="img/vegetal.svg" alt="">';
            
        }
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
        if(isset($plato->caracteristicas->item['tema11'])==(string)'singluten'){
            echo '<img src="img/singluten.svg" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema3'])==(string)'pizza'){
            echo '<img src="img/pizza.svg" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema12'])==(string)'burger'){
            echo '<img src="img/burger.svg" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema5'])==(string)'star'){
            echo '<img src="img/star.svg" alt="">';
            
        }
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
        if(isset($plato->caracteristicas->item['tema8'])==(string)'helado'){
            echo '<img src="img/helado.svg" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema10'])==(string)'postre'){
            echo '<img src="img/postre.svg" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema9'])==(string)'tarta'){
            echo '<img src="img/tarta.svg" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema5'])==(string)'star'){
            echo '<img src="img/star.svg" alt="">';
            
        }
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
        if(isset($plato->caracteristicas->item['tema8'])==(string)'helado'){
            echo '<img src="img/helado.svg" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema'])==(string)'carne'){
            echo '<img src="img/carne.svg" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema7'])==(string)'infantil'){
            echo '<img src="img/infantil.svg" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema3'])==(string)'pizza'){
            echo '<img src="img/pizza.svg" alt="">';
            
        }
        echo "<br>";
        echo "<br>";
    }

   
}
echo"</div>";
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
<footer>
    <img src="./img/star.svg" alt="">
    <b>Plato estrella</b>
    <br>
    <img src="./img/pizza.svg" alt="">
    <b>Pizza</b>
    <br>
    <img src="./img/burger.svg" alt="">
    <b>Hamburguesa</b>
    <br>
    <img src="./img/picante.svg" alt="">
    <b>Plato picante</b>
    <br>
    <img src="./img/tarta.svg" alt="">
    <b>Tarta/bizcocho</b>
    <br>
    <img src="./img/singluten.svg" alt="">
    <b>Plato sin gluten</b>
    <br>
    <img src="./img/carne.svg" alt="">
    <b>Lleva carne</b>
    <br>
    <img src="./img/vegetal.svg" alt="">
    <b>Plato vegano o que lleva verdura</b>
    <br>
    <img src="./img/pasta.svg" alt="">
    <b>Pasta</b>
    <br>
    <img src="./img/infantil.svg" alt="">
    <b>Menú Infantil</b>
    <br>
    <img src="./img/helado.svg" alt="">
    <b>Helado</b>
    <br>
    <img src="./img/postre.svg" alt="">
    <b>Postre dulce</b>
</footer> 
</body>
</html>

