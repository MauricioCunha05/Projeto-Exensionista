<?php
if (!defined('APP_BOOTSTRAPPED')) {
    http_response_code(403);
    exit('Forbidden');
}

$Eventos = new Evento("data/eventos.json");
$eventos_array = $Eventos->all();

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
    foreach ($eventos_array['eventos'] as $key => $evento) {
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$evento["data"]."</td>";
        echo "<td>".$evento["titulo"]."</td>";
        echo "<td>".$evento["descricao"]."</td>";
        echo '
            <td>
                <form method="post" action="views/admin/eventos_del.php" style="display:inline">
                    <input type="hidden" name="id" value="'.$key.'">
                    <button type="submit">Excluir</button>
                </form>
            </td>';

        echo "</tr>";
    }
    ?>
</table>