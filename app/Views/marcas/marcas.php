//utlizar el archivo plantilla.php
<?= $this->extend('layout/plantilla') ?>

<?= $this->section('encabezado') ?>
    encabezado xyz
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
    <h1>hola</h1>    
    <a href="" class="btn btn-primary">boton</a>
<?= $this->endSection() ?>