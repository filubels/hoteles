<?php

    include_once('../db/funsql.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/utilidades.js"></script>
</head>
<body>


 
<table>
    <thead>
        
    </thead>
    <tbody>
        <?php 
                $result=get_hostal();
                while($dato_hostal=$result->fetch_assoc()){
                    echo '<tr> <td>'.$dato_hostal['nombre'].' </td><td>'.$dato_hostal['direccion'].'</td><td>'.$dato_hostal['telefono'].'</td><td>'.$dato_hostal['cod_personal'].'</td><td><button class="btn_eliminar_hostal"  value="'.$dato_hostal['cod_hostal'].'">Enviar</button></td></tr>';

                }

            
        ?>

        
    </tbody>
</table>
</body>
</html>