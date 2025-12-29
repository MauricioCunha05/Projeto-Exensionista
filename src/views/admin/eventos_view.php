<?php
if (!defined('APP_BOOTSTRAPPED')) {
    http_response_code(403);
    exit('Forbidden');
}

$Eventos = new Evento(PROJECT_ROOT."/data/eventos.json");
$eventos_array = $Eventos->all()['eventos'];
uasort($eventos_array, function ($a, $b) {
    $dateA = DateTime::createFromFormat('d/m/Y', $a['data']);
    $dateB = DateTime::createFromFormat('d/m/Y', $b['data']);

    return $dateA <=> $dateB;
});

?>

<table id="Eventos">
    <tr>
        <th>ID</th>
        <th>Data</th>
        <th>Evento</th>
        <th>Descrição</th>
        <th>Botões</th>
    </tr>   
    <?php 
    foreach ($eventos_array as $key => $evento) {
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$evento["data"]."</td>";
        echo "<td>".$evento["titulo"]."</td>";
        echo "<td>".$evento["descricao"]."</td>";
        echo '
            <td>
                <form method="post" action="actions/delete.php" style="display:inline">
                    <input type="hidden" name="id" value="'.$key.'">
                    <button type="submit">Excluir</button>
                </form>
            <br>';
        echo '
                <form method="post" action="?page=admin/eventos_edit" style="display:inline">
                    <input type="hidden" name="id" value="'.$key.'">
                    <input type="hidden" name="data" value="'.$evento["data"].'">
                    <input type="hidden" name="titulo" value="'.$evento["titulo"].'">
                    <input type="hidden" name="descricao" value="'.$evento["descricao"].'">
                    <button type="submit">Editar</button>
                </form>
            </td>';
        echo "</tr>";
    }
    ?>
</table>

<button type="button"><a href="?page=admin/eventos_add">Novo Evento</a></button>