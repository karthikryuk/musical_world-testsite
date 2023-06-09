<?php
    session_start();
    if(!isset($_SESSION['email_address']))
		header('location:index.php');
		
	$email_address = $_SESSION['email_address'];
?>


<!DOCTYPE HTML>
<html>

<head>
	<title>Music Buzz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<link rel="icon" href="images/i1.png" />
    <!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/css/mdb.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- //Custom Theme files -->
	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<!--//webfonts-->
</head>

<body>
	<!-- header -->
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="index.php">
					Musical World
                </a>
                <pre>                 </pre>
                <li class="nav-item">
					<b style="font-size:20px;"><p style="color:blue;"><?php echo "WELCOME ".$_SESSION['username'];?></p></b>
                </li>
				<button class="navbar-toggler ml-lg-auto ml-sm-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav text-center ml-auto">
						<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">Track</button>
								<div class="dropdown-menu dropdown-primary">
									<a class="dropdown-item" href="kannada_songs.php"><b>Kannada Songs</b></a>
									<a class="dropdown-item" href="hindi_songs.php"><b>Hindi Songs</b></a>
									<a class="dropdown-item" href="english_songs.php"><b>English Songs</b></a>
									<a class="dropdown-item" href="uploaded_songs.php"><b>Uploaded Songs</b></a>
								</div>	
						</div>
						<li class="nav-item  mr-3">
							<a class="nav-link scroll" href="#about"></a>
                        </li>
                        <li class="nav-item">
							<a class="nav-link scroll" href="#contact"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="logout.php">logout</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!-- //header -->
	<!-- banner -->
	<div class="banner" id="home">
		<div class="container">
			<div class="banner-text">
				<div class="slider-info text-right">
					<h1 class="text-uppercase">listen to music anywhere.</h1>
					<p class="text-white">\</p>
					<a class="btn btn-agile  mt-4 scroll" href="english_songs.php" role="button">Listen to Songs</a>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about-->
	<section class="wthree-row" id="about">
		<div class="row justify-content-center align-items-center no-gutters abbot-main">
			<div class="col-lg-6 p-0">
				<img src="https://learnsql.com/blog/what-is-dbms/DBMS.png" class="img-fluid" alt="" />
			</div>
			<div class="col-lg-6 abbot-right px-md-5  py-lg-0 py-3">
				<div class="card">
					<div class="card-body px-lg-5">
						<h3 class="stat-title card-title align-self-center mb-sm-5 mb-3">DBMS MINI PROJECT
							<br> MUSIC STREAMING</h3>
						<span class="w3-line"></span>
						<p class="card-text align-self-center my-4 text-white">
						A BASIC SITE TO LISTEN TO MUSIC OF ALL LANGUAGES
						</p>
						<p class="card-text align-self-center mb-5 text-white">CLICK ON THE TOP LEFT TO START LISTENING</p>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- //copyright -->
    <!-- js-->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- js-->
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/js/mdb.min.js"></script>
	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js "></script>
    <script src="js/easing.js "></script>
    <script src="js/SmoothScroll.min.js "></script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js">
	</script>
	<!-- //Bootstrap Core JavaScript -->
</body>

</html>
