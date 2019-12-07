<!DOCTYPE html>
<html>



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







    <div class="row">
      <div class="navbar">

        <ul>
            <li><a href="logout.php">Sign Out</a></li>
            <li><a href="home.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="cardsearch.php">Card Search</a></li>
        </ul>

      </div>
    </div>

    <div class="search">

        <h1>Here is where the magic happens!</h1>
        <p>Type in the box below to search for your favorite cards!</p>

        <!-- Load icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- The form -->
        <form class="example" action="action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>



    </body>


</html>
