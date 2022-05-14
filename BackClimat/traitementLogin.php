
<?php
session_start();
include('function.php');

if (isset($_POST['mail']) && isset($_POST['mdp']) ) {
    $mail= $_POST['mail'];
    $mdp = sha1($_POST['mdp']);
    $log = login($mail,$mdp);

    if($log!=null){
        $_SESSION['admin'] = $log;
        header('Location: elements.php');    
    }else{
        $_SESSION['erreur']='Mail ou Mdp errone';
        header('Location: rechauffement_climatique.php');
    }
}

?>