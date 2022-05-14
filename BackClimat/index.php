<?php
	session_start();
	if(isset($_SESSION['admin'])){
		header('Location: article-rechauffement_climatique.php');
	}else{
		header('Location: rechauffement_climatique.php');
	}
?>