<?php
if (!defined('APP_BOOTSTRAPPED')) {
    http_response_code(403);
    exit('Forbidden');
}

$Eventos = new Evento(PROJECT_ROOT."/data/eventos.json");
$eventos_array = $Eventos->all()['eventos'];
uasort($eventos_array, fn($a, $b) => $a <=> $b);


include 'modals/modal_desc.php';
include 'modals/modal_add.php';
include 'modals/modal_edit.php'
?>

<div class="d-flex flex-column align-items-center mt-2">
    <div class="table-responsive border rounded overflow-auto" id="viewtable-container">
        <table class="table fs-5 mb-2" id="viewtable">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Evento</th>
                    <th>Descrição</th>
                    <th>Admin</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                foreach ($eventos_array as $key => $evento) {
                    echo "<tr>
                            <td>".$evento["data"]."</td>
                            <td class='text-nowrap' >".$evento["titulo"]."</td>

                            <td>
                                <div class=''>
                                    <div class='descricao text-truncate' style='max-width:6.4rem; max-height:2rem'>".nl2br(htmlspecialchars($evento["descricao"]))."</div>
                                    <a
                                        class='link-underline link-underline-opacity-0 text-nowrap'
                                        data-bs-toggle='modal'
                                        data-bs-target='#descModal'
                                        data-bs-descricao='".$evento["descricao"]."'
                                        data-bs-titulo='".$evento["titulo"]."'
                                        href='#'
                                        >
                                        Ver descrição completa
                                    </a>
                                </div>
                            </td>

                            <td class='align-middle'>
                                <div role='group' class='btn-group-vertical'>
                                    <form method='post' action='actions/delete.php'>
                                        <input type='hidden' name='id' value='".$key."'>
                                        <button type='submit' class='btn btn-danger'>Excluir</button>
                                    </form>
                                    <form method='post' action='?page=admin/eventos_edit' >
                                        <input type='hidden' name='id' value=".$key.">
                                        <input type='hidden' name='data' value=".$evento['data'].">
                                        <input type='hidden' name='titulo' value=".$evento['titulo'].">
                                        <input type='hidden' name='descricao' value=".$evento['descricao'].">
                                        <button type='submit' class='btn btn-info' id='editbutton'>Editar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <button
        class="btn"
        data-bs-toggle='modal'
        data-bs-target='#addModal'
        id="addbutton">
    Novo Evento
    </button>
</div>
