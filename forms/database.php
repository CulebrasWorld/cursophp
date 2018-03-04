<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pruebas con Base de datos</title>
    <link rel="stylesheet" href="css/forms.css">
</head>
<body>

    <div class="database_form">

      <!--  <h3>Formulario</h3>

        <span>Nombre: </span>
        <input type="text" name="txt_name" val=""/>
        <br/><br/>
        <span>Apellidos:  </span>
        <input type="text" name="txt_apellidos" val=""/>

        <br/><br/>
        <input type="submit" value="Guardar"/>-->

        <?php
            $server = "localhost";
            %user = "root"
            $pwd = "";
            $db = "culebras";
            $query = "SELECT * FROM Usuarios";

            $conection = mysqli_connect($server, $user, $pwd);
            mysqli_select_db($conection, $db);
            $result = mysqli_query($conection, $query);

            echo "Comomolo";


        ?>

    </div>

</body>
</html>