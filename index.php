<?php
session_start();
include('include/header.php');
$page = 'index';
if (isset($_GET['p'])) {
    $page = $_GET['p'];
}
include('pages/' . $page . '.php');

?>