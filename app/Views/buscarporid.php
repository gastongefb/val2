<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 


//foreach($materia as $materia):

    echo $titulo;

    ?>
    <br>
    <?php
    echo $materia['id_materia'];?>
    <br>
    <?php
    echo $materia['nombre_materia'];?>
    <br>
    <?php
    echo $materia['cuatrimestre'];
    

 //endforeach

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>