
@extends ('layouts.app')
@section('content')
<php>

//Recibes las variables por P-OST
    <div class="panel-body">
        <br><br>
        <td>
       <a href='http://www.uterra.com/archcodfuente/demos/id103/lista2.php' title='Clic aquí'>Ver los resgistros guardados</a></p>
    include 'conexion.php';

    //Haces lo demas con el  resto de los campos de tu formulario
//Realizas el Insert a $pregunta_id=$_POST['pregunta_id'];
        $respuesta=$_POST['respuesta'];
        $tituloPregunta=$_POST['tituloPregunta'];
        </td>

        include("../abre_conexion.php");

        $_GRABAR_SQL = "INSERT INTO $respuestas (pregunta_id ,respuesta) VALUES ('$pregunta_id','$respuesta')";
        mysql_query($_GRABAR_SQL);

        // Cerramos la conexion a la base de datos
        include("../cierra_conexion.php");

        // Confirmamos que el registro ha sido insertado con exito

        echo "
        <p>Los datos han sido guardados con exito.</p>

        <p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>

        <p> tu bd
           $sql = "INSERT INTO $respuestas (pregunta_id ,respuesta) VALUES ('$pregunta_id','$respuesta')";
        </p>

//Ejecutas tu consulta y listo
    </div>
</php>