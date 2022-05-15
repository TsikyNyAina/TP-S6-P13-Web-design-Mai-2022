
<?php 

	include ('dbconnect.php');
	

    function login($mail,$mdp){
        $sql="select * from admin where mail='%s' and mdp='%s'";
		$sql=sprintf($sql,$mail,$mdp);
		//echo $sql;
		$basealaina = pg_query(connect(), $sql); //maka tableau tant que tsy lany ato de alefaso ao am val
        while ($temp = pg_fetch_array($basealaina)) { //avadika tableau
            $val[] = $temp;
        }

        if(count($val)==1){
            return $val;
        }else{
            return null;
        }

    }
    
    function getId(){
        $sql="select nextval('seq_article')";
        
        $basealaina = pg_query(connect(), $sql); //maka tableau tant que tsy lany ato de alefaso ao am val
        while ($temp = pg_fetch_array($basealaina)) { //avadika tableau
            $val[] = $temp;
        }
        return $val[0]['nextval'];
    }

    function insertActu($article){
        $sql="insert into article(id,titre,soustitre,source,resume,url) values(%d,'%s','%s','%s','%s','%s')";
        $url = toSlug($article['titre']).'-'.$article['id'];
        $sql=sprintf($sql,$article['id'],$article['titre'],$article['soustitre'],$article['source'],$article['resume'],$url);
        pg_query(connect(), $sql);
    }

    function insertPara($titre,$contenu,$idarticle){
        $sql="insert into sousArticle(titre,contenu,idarticle) values('%s','%s',%d)";
        $sql=sprintf($sql,$titre,$contenu,$idarticle);
        pg_query(connect(), $sql);
    }   


function toSlug($string){
	return str_replace(" ","-",$string);
}
	
?>


