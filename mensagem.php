<?php

if (isset($_SESSION['mensagem'])):

?>

    <div class="alert alert-warning alert-dismisssble fase show " role="alert">
        <?php $_SESSION['mensagem']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php
    unset($_SESSION['mensagem']);
endif;
?>