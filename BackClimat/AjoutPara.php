<?php

	session_start();
	if($_SESSION['admin']){
		
		$newdata['titre']=$_GET['ptitre'];
		$newdata['contenu']= $_GET['contenu'];
		
			
		if(!isset($_SESSION['para'])){
			   $_SESSION['para'][]=$newdata;
		}else {
			$_SESSION['para'][]=$newdata;
		}
		
		echo json_encode($_SESSION['para']);
	}else{
		header('Location: rechauffement_climatique.php');
	}
    

?>