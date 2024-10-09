//utlizar el archivo plantilla.php
<?= $this->extend('layout/plantilla') ?>

<?= $this->section('encabezado') ?>
    encabezado para agregar marcas
<?= $this->endSection() ?>


<?= $this->section('contenido') ?>
    <h1>Agregar marca</h1>        
<?= $this->endSection() ?>



<?= $this->section('pie') ?>
    pie para agregar marcas        
<?= $this->endSection() ?>