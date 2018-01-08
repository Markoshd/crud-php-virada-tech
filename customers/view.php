<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 07/01/2018
 * Time: 20:50
 */

require_once('functions.php');
view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

    <h2>Cliente <?php echo $customer['id']; ?></h2>
    <hr>

<?php if (!empty($_SESSION['message'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

    <dl class="dl-horizontal">
        <dt>Nome:</dt>
        <dd><?php echo $customer['name']; ?></dd>

        <dt>Password:</dt>
        <dd><?php echo $customer['password']; ?></dd>

        <dt>Site/Url:</dt>
        <dd><?php echo $customer['url']; ?></dd>

        <dt>Data de Cadastro:</dt>
        <dd><?php echo $customer['created']; ?></dd>
    </dl>


    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Editar</a>
            <a href="index.php" class="btn btn-default">Voltar</a>
        </div>
    </div>

<?php include(FOOTER_TEMPLATE); ?>