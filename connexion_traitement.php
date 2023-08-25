<?php
session_start();
require_once 'config.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $check = $bdd->prepare('SELECT  email, password FROM utilisateurs WHERE email=?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowcount();

    if ($row == 1) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $password = hash('sha256', $password);
            if ($data['password'] === $password) {
                $_SESSION['user'] = $data['email'];
                header('Location:Index.php');
            } else
                header('Location:Connexion.php?Login_err=already');
        } else
            header('Location:Connexion.php?Login_err=already');
    } else
        header('Location:Connexion.php?Login_err=already');
} else
    header('Location:Connexion.php?Login_err=already');
?>