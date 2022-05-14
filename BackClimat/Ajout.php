<?php
	session_start();
	if($_SESSION['admin']){

		include('../function.php');
		
		$idarticle = getId()+1;

		$article = $_SESSION['article'];
		$article['id']=$idarticle;

		$para = $_SESSION['para'];

		

		insertActu($article);

		for($i=0;$i<count($para);$i++){
			insertPara($para[$i]['titre'],$para[$i]['contenu'],$idarticle);
		}
	
    
    	unset($_SESSION['article']);
    	unset($_SESSION['para']);

    	header('Location: article-rechauffement_climatique.php');
	}else{
		header('Location: rechauffement_climatique.php');
	}
		

?>