<?php

function generarTabla($datos)
{
    
    $tabla = '<table class="table table-striped table-bordered table-hover">';
    $tabla .= '<thead>';
    $tabla .= '<tr>';
    $tabla .= '<th scope="col">Song</th>';
    $tabla .= '<th scope="col">Gender</th>';
    $tabla .= '<th scope="col">Play</th>';
    $tabla .= '</tr>';
    $tabla .= '</thead>';
    $tabla .= '<tbody>';

    foreach ($datos as $fila) {
        $tabla .= '<tr>';
        $tabla .= '<td>' . $fila['nombre_cancion'] . '</td>';
        $tabla .= '<td>' . $fila['genero'] . '</td>';
        $tabla .= '<td>' . getRespaldoSongPlayer($fila['archivo']) . '</td>'; 
        $tabla .='<td> '.getDeleteBtn($fila['id_cancion']).'</td>';
        $tabla .='<td> '.getformEdit($fila['id_cancion']).'</td>';
       
        $tabla .= '</tr>';
    }

    $tabla .= '</tbody>';
    $tabla .= '</table>';

    
    return $tabla;
}
function getformEdit($id){
    $formulario='<form action="../../../../App/Home/Edit.php" method="POST">
    
    <input type="text" hidden name="id_archivo" id="id_archivo" value="'.$id.'" class="form-control">
    <button type="submit" class="btn btn-secondary" value="editar"  name="accion" >editar</button>
   
   </form>';
   
       return $formulario;
   }
function getDeleteBtn($id){
 $formulario='<form action="../../../../App/php/server.php" method="POST">
 
 <input type="text" hidden name="id_archivo" id="id_archivo" value="'.$id.'" class="form-control">
 <button type="submit" class="btn btn-secondary" value="delete"  name="accion" >eliminar</button>

</form>';

    return $formulario;
}
function getRespaldoSongPlayer($archivoBlob)
{
    $base64Data = base64_encode($archivoBlob);
    $urlArchivoBlob = 'data:audio/mp3;base64,' . $base64Data;
    // echo ($urlArchivoBlob);
    $player='<audio controls>';
    $player.='<source src="'. $urlArchivoBlob.'" type="audio/mp3">';
    $player.='Tu navegador no admite la reproducción de audio.</audio>';
    return $player;
}
?>