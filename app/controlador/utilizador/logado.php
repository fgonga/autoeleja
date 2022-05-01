<?php
session_start();
if (!@$_SESSION['open'] == true){
    header('location: /app/visao/entrar.php');
}
