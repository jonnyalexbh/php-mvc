<div class="container">
    <h3>Usted está en la vista: application/view/home/index.php</h3>
    <p>Variable desde el controlador: <b><?php echo $title; ?></b></p>
    <p>esto podría ser la página de inicio.</p>
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Open Modal</button>
</div>

<?php
LoadFiles::load(APP . 'view/_templates/modales');
