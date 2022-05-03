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
    <nav class="navbar navbar-expand-md bg-transparent navbar-light fixed-top pl-md-5 pr-md-5" id="mainNav">

        <!-- Updated with latest Creative -->
        <a href="#page-top">
            <img class="navbar-logo" src="img/typhoon logo.svg" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
      </button>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                    <a class="nav-link "href="search.php">Search</a>
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
<?xml-stylesheet type="text/css" href="css/index.css"?>
	<head>
		<title>Create Page</title>
	</head>
<body>
<header class="masthead text-center text-white d-flex pt-md-10">

	<div class="container my-auto">
			<div class="col-lg-12 text-left" style="border-radius: 0.5em;">
                    <h2 class="section-heading" style="font-size: 30pt; font-family: 'Poppins', sans-serif; ">Your Library of Information of Typhoons</h2>
                    <p>Freedom of information of our typhoon catalog </p>
                    <p>Meteorologists around the world use modern technology, such as satellites, weather radars and computers,</br>
                    to track tropical cyclones as they develop. Tropical cyclones may be difficult to forecast,</br>
                    as they can suddenly weaken or change their course.</p>  
                    <hr class="light">
			</div>				
    </div>
    
</header>
<section class="bg-red text-white" id="Images">
        <div class="container" style="max-width: 600px;">
        <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading" style="font-size: 3em; font-family: 'Poppins', sans-serif;">Create</h2>
                    <hr class="light">
                </div>
            </div>
            <div class="text-center text-bold pt-4" style="font-family: 'Poppins', sans-serif; font-size: 1.3em;">
                <p>create data to be uploaded to our database  </p>
</div>
<div class="container my-auto">
	<div class="text-bold pt-3 text-left ">			
		<form method="post" action="createProcess.php" style="font-size: 10pt; font-family: 'Poppins', sans-serif;">
			Typhoon ID <input type="text" class="form-control"   name="typhoonId" placeholder="Typhoon ID"/><br/>
			Name <input type="text" class="form-control"  name="name" placeholder="Name of Typhoon"/><br/>
			Windspeed <input type="text" class="form-control"  name="windspeed" placeholder="Windspeed"/><br/>
			Damage to Property <input type="text" class="form-control"  name="DamageToProperty" placeholder="Total Damage of Property"/><br/>
			Year <input type="text" class="form-control"  name="year" placeholder="Year of Devastation"/><br/>
			Death <input type="text" class="form-control"  name="deaths" placeholder="Number of Deaths"/><br/>
			<br/>
            <input type="submit" class="btn btn-black" value="Save">
		</form>	
	</div>
</div>
</div>
</div>
</section>
<section class="bg-black pt-3 pb-3 text-white">
        <div class="text-center text-bold pt-6" style="font-family: 'Poppins', sans-serif; font-size: 9px;">
        <div><img class="navbar-logo" src="img/typhoon logo.svg">
            <address>
                Typhoon Information Board &copy; 2022 <br/>
                All rights Reserved <br/>
            </address>
        </div>
       <div>
    </section>
</body>
</html>



