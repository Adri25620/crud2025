<?php
include_once '../templates/header.php';
?>

<div class="container justify-content-center mt-3">
    <div class="row">
        <div class="col">
            <h1 class="text-center mb-2">REGISTRO DE CLIENTES</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6">

            <form action="/CRUD2025/Controller/clientes/guardar.php" method="POST" class="form-control">

                <div class="row mb-3">
                    <label for="cli_nombres">Ingrese su nombre:</label>
                    <input type="text" name="cli_nombres" class="form-control" placeholder="Nombres..." required>
                </div>

                <div class="row mb-3">
                    <label for="cli_apellidos">Ingrese sus apellidos:</label>
                    <input type="text" name="cli_apellidos" class="form-control" placeholder="Apellidos..." required>
                </div>

                <div class="row mb-3">
                    <label for="cli_telefono">Ingrese su telefono:</label>
                    <input type="number" name="cli_telefono" class="form-control" placeholder="Telefono..." required>
                </div>

                <div class="row mb-3">
                    <label for="cli_nit">Ingrese su nit:</label>
                    <input type="number" name="cli_nit" class="form-control" placeholder="Nit..." required>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <button type="submit" class="btn btn-success">REGISTRAR</button>
                    </div>
                </div>
        </div>
    </div>

    </form>
</div>

<?php

include_once '../templates/footer.php';

?>