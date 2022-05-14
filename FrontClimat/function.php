
<?php 

	include ('dbconnect.php');
	
    function ficheActusSlug($idActus,$slug)
    {
        $slug= $slug."-".$idActus;
        $sql = "select * from article where id=%s and url='%s'";
        $sql = sprintf($sql, $idActus,$slug);
        //echo $sql;
        // $val = array();
        $basealaina = mysqli_query(connect(), $sql); //maka tableau tant que tsy lany ato de alefaso ao am val
        while ($temp = mysqli_fetch_array($basealaina)) { //avadika tableau
            $val    = $temp;
        }
        if(isset($val)){
            return $val;
        }else{
            return null;
        }
    } 

    function fichePara($idActus)
    {
        $sql = "select * from sousArticle where idarticle=%s";
        $sql = sprintf($sql, $idActus);
        //echo $sql;
        $val = array();
        $basealaina = mysqli_query(connect(), $sql); //maka tableau tant que tsy lany ato de alefaso ao am val
        while ($temp = mysqli_fetch_array($basealaina)) { //avadika tableau
            $val[]    = $temp;
        }
        if(isset($val)){
            return $val;
        }else{
            return null;
        }
        
    }
    
function getAllActus() {
    $sql = "select * from article order by dateArticle asc";
    $val = array();
    $basealaina = mysqli_query(connect(), $sql); //maka tableau tant que tsy lany ato de alefaso ao am val
    while ($temp = mysqli_fetch_array($basealaina)) { //avadika tableau
        $val[] = $temp;
    }
    // mysqli_free_result($val );
    return $val;
}


function toSlug($string){
    $string = str_replace("?","-",$string);
	return str_replace(" ","-",$string);
}
	
?>


