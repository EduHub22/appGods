<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gods & Write</title>
    <style>

        div.header{
            display: flex;
            width: 100%;
            max-width: 1080px;
            align-items: center;
            justify-content: center;
            
        }
        div.header img {
            width: 120px;
            margin: 10px auto;
        }

        div.header h1{
           
            font-size: 2rem;
            color: #fff;
 
        }

        body{
            background-color: #fff;
            margin: 0px;
        }
        .action_dioses{
            display: flex;
            height: 100px;
            background-color: #1a1a1a;
            align-items: center;
            justify-content: center;
            margin-top: 25px;
           
        }

        .action_dioses p {color: #fff;}
        .contenedor {
            width: 100%;
            max-width: 1080px;
            margin: 0 auto;
            
            }           

    </style>

</head>
<body>
    <div class="header">
        <h1>DIOSES</h1>
        <img src="https://comunicacion.s3.eu-west-1.amazonaws.com/appEdu/logotipo.svg">
        <h1>DIOSES</h1>
       
    </div>
    <div class="action_dioses">
    
<?php
               
     try {
    
      require_once 'db/connection.php';
      echo '<p>Conectado satisfactoriamente a la base de datos ' . $dbname . ' en el host ' . $host . '</p>';
      require_once '../db/pdoconfig.php';
      include 'pages/datos.php';
 
        } catch (PDOException $error) {
                die('No se ha podido acceder a la base de datos ' . $dbname . ':' . $error->getMessage());
        }
?>
        

    </div>

<div class="contenedor">

   Todo el contenido…
  </div>
    
</body>
</html>