<?php
$nome = 'campo<script>alert("Oi");</script>';
?>

<input type="text" name="<?= addslashes($nome) ?>" />
<input type="text" name="<?= htmlentities($nome) ?>" />