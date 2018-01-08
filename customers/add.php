<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 07/01/2018
 * Time: 20:27
 */

require_once('functions.php');
add();
?>

<?php include(HEADER_TEMPLATE); ?>

    <h2>Novo Cliente</h2>

    <form action="add.php" method="post">
        <!-- area de campos do form -->
        <hr />
        <div class="row">
            <div class="form-group col-md-5">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="customer['name']">
            </div>

            <div class="form-group col-md-3">
                <label for="campo2">Password</label>
                <input type="text" class="form-control" name="customer['password']">
            </div>

            <div class="form-group col-md-4">
                <label for="campo3">Site/Url</label>
                <input type="text" class="form-control" name="customer['url']">
            </div>

            <div class="form-group col-md-2 hidden">
                <label for="campo3">Data de Cadastro</label>
                <input type="text" class="form-control" name="customer['created']" disabled>
            </div>
        </div>

        <div id="actions" class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>

<?php include(FOOTER_TEMPLATE); ?>