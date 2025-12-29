
<?php

if (!defined('APP_BOOTSTRAPPED')) {
    http_response_code(403);
    exit('Forbidden');
}
?>

<form action="actions/add.php" method="post">
    <input type="date" name="data" min="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>" >
    <input type="text" name="titulo" placeholder="Título">
    <input type="text" name="descricao" placeholder="Descrição">
    <button type="submit">Salvar</button>
</form>

