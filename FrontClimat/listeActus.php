<?php session_start();
require("function.php");
//var_dump($somme);
$actus = getAllActus();


?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Actus | ActusMada.com</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/skin-lblue.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/normalize.css">

	<link rel="stylesheet" href="css/ecommerce.css">

	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/setting.css">
	<link rel="stylesheet" href="css/responsive.css">
	<!-- Fav icon -->
	
</head>

<body>

<!-- start header -->
    <header>
        <div class="header-1">

            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <!-- Logo section -->
                        <div class="logo">
                            <h1><a href="indexadmin.html"> Liste Actus </a></h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Header one ends -->

    </header><!-- end header -->

<!-- start main content -->
<main class="main-container">
<!-- compare content -->
	<!-- Main content starts -->

	<div class="main-block">



		<div class="container">

			<!-- Actual content -->
			<div class="ecommerce pt-40">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<!-- Shopping items content -->
						<div class="shopping-content">
							<!-- Block Title -->
							<!-- Shopping Edit Profile -->
							<div class="shopping-wishlist">
								<!-- Recent Purchase Table -->
								<div class=" table-responsive">
									<table class="table table-bordered">
										<!-- Table Header -->
										<thead>
										<tr>
											<th>Id Actus</th>
											<th>Date de l'Actus</th>
											<th>Categorie</th>
											<th>Titre</th>
											<th>Resume</th>
											
										</tr>
										</thead>
										<tbody>
										<?php for($i = 0 ; $i < count($actus) ;$i++) { ?>
										<tr>
										<td><?php echo $actus[$i]['id'];?> </td>
											<td>
												<?php echo $actus[$i]['dateActus'];?>
											</td>
											<td><?php echo $actus[$i]['categorie'];?> </td>
											<td><a href="fiche/<?php echo $actus[$i]['categorie']; ?>/<?php echo $actus[$i]['url']?>.php"><?php echo $actus[$i]['titre'];?></a></td>
											<td><?php echo $actus[$i]['resume'];?></td>
											
											
										</tr>
										<?php } ?>
										</tbody>
									</table>
								</div>
								<!-- Pagination -->
								<div class="shopping-pagination">
									
								</div>
								<!-- Pagination end-->
							</div>
						</div>
					</div>
				</div>
				<br />



			</div>
		</div>
	</div>

	<!-- Main content ends -->
<!-- end compare content -->

	
</main>
<!-- end main content -->

</body>


</html>