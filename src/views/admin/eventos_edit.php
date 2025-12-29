<?php
require("../../Classes/Evento.php");
$Eventos = new Evento("../../data/eventos.json");
$eventos_array = $Eventos->all();
$sla = true;

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
                <form method="post" action="eventos_del.php" style="display:inline">
                    <input type="hidden" name="id" value="'.$key.'">
                    <button type="submit">Excluir</button>
                </form>
            </td>';

        echo "</tr>";
    }
    ?>
</table>