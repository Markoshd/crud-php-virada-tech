<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 07/01/2018
 * Time: 21:59
 */

require_once('functions.php');

if (isset($_GET['id'])){
    delete($_GET['id']);
} else {
    die("ERRO: ID não definido.");
}
?>