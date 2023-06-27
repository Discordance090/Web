<?php

function generarTabla($datos)
{
    $tabla = '<table class="table table-striped table-bordered table-hover">';
    $tabla .= '<thead>';
    $tabla .= '<tr>';
    $tabla .= '<th scope="col">Song</th>';
    $tabla .= '<th scope="col">Genre</th>';
    $tabla .= '<th scope="col">Play</th>';
    $tabla .= '</tr>';
    $tabla .= '</thead>';
    $tabla .= '<tbody>';

    foreach ($datos as $fila) {
        $tabla .= '<tr>';
        $tabla .= '<td>' . $fila['nombre_cancion'] . '</td>';
        $tabla .= '<td>' . $fila['genero'] . '</td>';
        $tabla .= '<td>' . getRespaldoSongPlayer($fila['archivo']) . '</td>';
        $tabla .= '</tr>';
    }

    $tabla .= '</tbody>';
    $tabla .= '</table>';

    return $tabla;
}

function getSongPlayer($archivoBlob)
{
    $base64Data = base64_encode($archivoBlob);
    $urlArchivoBlob = 'data:audio/mp3;base64,' . $base64Data;
    
    // echo ($urlArchivoBlob);
    $player='<audio controls>';
    $player.='<source src="<?php echo'. $urlArchivoBlob.'; ?>" type="audio/mp3">';
    $player.='Tu navegador no admite la reproducción de audio.</audio>';
    return $player;
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