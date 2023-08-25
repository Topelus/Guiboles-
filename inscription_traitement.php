<?php

require_once 'config.php';




if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);

    $check = $bdd->prepare('SELECT email, password FROM utilisateurs WHERE email=?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowcount();

    if ($row == 0) {
        if (strlen($pseudo)<= 100) {
            if (strlen($email)<= 100) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    if ($password == $confirm_password) {
                        $password = hash('sha256', $password);
                        $ip = $_SERVER['REMOTE_ADDR'];

                        $insert = $bdd->prepare('INSERT INTO utilisateurs(nom, prenom, email, pseudo, password,ip) VALUES(:nom, :prenom, :email, :pseudo, :password,:ip)');
                        $insert->execute(
                            array(
                                'nom' => $nom,
                                'prenom' => $prenom,
                                'email' => $email,
                                'pseudo' => $pseudo,
                                'password' => $password,
                                'ip' => $ip
                            )
                        );
                        header('Location:Inscription.php?reg_err=success');

                    } else
                        header('Location:Inscription.php?reg_err=password');

                } else
                    header('Location:Inscription.php?reg_err=email_validate');

            } else
                header('Location:Inscription.php?reg_err=email_length ');

        } else
            header('Location:Inscription.php?reg_err=pseudo_length ');

    } else
        header('Location:Inscription.php?reg_err=email');

} else
    header('Location:Inscription.php?reg_err=already');
?>