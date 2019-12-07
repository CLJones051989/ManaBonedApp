<!DOCTYPE html>
<html>
    <?php
		SESSION_START();

		$_SESSION = array();
		session_destroy();
	?>


    <head>

        <title>Mana Boned</title>

        <link rel="stylesheet" type="text/css" href="styles.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    </head>

    <body>
     <div class="bg"></div>
     <div class="row">
      <div>
        <img src="MBBanner.png" class="img-responsive" alt="MBBanner" height="200">
      </div>
    </div>

    <div class="home">

		<h1>You have successfully logged out!</h1>
		<p>Click <a href="index.php">here</a> to redirect to the login page. </p>

	</div>
