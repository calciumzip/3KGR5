<!doctype html>
<script src="https://use.fontawesome.com/4dfd1d7bab.js"></script>
<link href="css/index.css" rel="stylesheet">
<link href="css/creative.css" rel="stylesheet">
<link href="css/3KGR5.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom Fonts -->
    <script src="https://use.fontawesome.com/4dfd1d7bab.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<body id="page-top">
    <nav class="navbar navbar-expand-md bg-red navbar-light fixed-top pl-md-5 pr-md-5" id="mainNav">

        <!-- Updated with latest Creative -->
        <a href="#page-top">
            <img class="navbar-logo" src="img/typhoon logo.svg" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
      </button>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="search.php">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create.php">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="update.php">Update</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="delete.php">Delete</a>
                </li>
            </ul>
        </div>
    </nav>

<html>
	<head>
		<title>Update Page</title>
	</head>
	<body>
    <section class="bg-red text-white" id="Images">
        <div class="container" style="max-width: 600px;">
        <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading" style="font-size: 3em; font-family: 'Poppins', sans-serif;">Update</h2>
                    <hr class="light">
                </div>
            </div>
            <div class="text-left text-bold pt-4" style="font-family: 'Poppins', sans-serif; font-size: 1.3em;">
		<form method="post" action="updateProcess.php">
		Typhoon ID: <select name="id" class="form-control">
				<option>Select Typhoon ID</option>
				<?php
					$xml = new domdocument("1.0");
					$xml->load("3KGR5.xml");
					$Typhoons = $xml->getElementsByTagName("typhoon");
					
					foreach($Typhoons as $typhoon){
						$id = $typhoon->getAttribute("id");
						echo "<option>" .$id. "</option>";
					}
				?>
			</select><br>
			New Windspeed: <input type="text" class="form-control" name="newwindspeed"/><br/>
            New Damage To Property: <input type="text"  class="form-control" name="newDamageToProperty"/><br/>
            New Year: <input type="text"  class="form-control" name="newyear"/><br/>
            New Deaths: <input type="text" class="form-control" name="newdeaths"/><br/>
			<br/><input type="submit" class="btn btn-black" value="Update">
		</form>
	</body>
</html>



