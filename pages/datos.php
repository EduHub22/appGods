<?php


    $dioses = $connection->query('SELECT * FROM DatosGrecia')->fetchAll();

    foreach ($dioses as $dios){
        echo '<p>' . $dios['id'] . ';' . $dios['NombreG'] . '</p>';
    }



?>