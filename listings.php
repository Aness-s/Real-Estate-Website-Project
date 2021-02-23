<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@500;700&family=Lobster&display=swap&family=Nunito:wght@700&display=swap"
      rel="stylesheet"
    />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="listings.css">
</head>

<body>
<!-- Nav Bar -->
<nav>
          <h1 id="logo"><a href="home.html">Sky Realty</a></h1>
          <ul class="nav-links">
            <li><a href="team.html" >Team</a></li>
            <li><a href="ceo.html" >CEO</a></li>
            <li><a href="https://webdev.scs.ryerson.ca/~asaada/530term/tour.php" >Open House</a></li>
            <li><a href="schedule.html" >Schedule</a></li>
            <li><a href="https://webdev.scs.ryerson.ca/~asaada/530term/listings.php" >Listings</a></li>
            <li> <a href="https://webdev.scs.ryerson.ca/~asaada/530term/map.php" >Map</a></li>
            <li><a href="legal.html">Legal</a></li>
          </ul>
          <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
          </div>
        </nav>
    <h2 style="color: white;" class="titlecard"> <b>FEATURED LISTINGS</b></h2>

    <div class="container-fluid center">

        <div class="rows mt-4"></div>

    <?php
    
        $connection = mysqli_connect("localhost", "asaada", "klovjaUb", "asaada");

        if (mysqli_connect_errno())
        {
            echo "Failed to connect.";
            exit();
        }
        
        /* SQL commands
            use asaada

            CREATE TABLE listings(address varchar(512) NOT NULL, bedrooms INT, washrooms INT, area INT, garage varchar(64), cash varchar(512) NOT NULL);

            INSERT INTO listings (address, bedrooms, washrooms, area, garage, cash) values ('14 SEINECLIFFE RD, MARKHAM, ON L3T 1K4', 5, 7, 8000, '3 Car Garage', '$5,995,000');
            INSERT INTO listings (address, bedrooms, washrooms, area, garage, cash) values ('126 PRINCESS ANNE CRES, TORONTO, ON M9A 2R6', 5, 5, 4100, 'Dual Car Garage', '$2,688,000');
            INSERT INTO listings (address, bedrooms, washrooms, area, garage, cash) values ('478 ANNETTE ST, TORONTO, ON M6P 1S2', 5, 3, 3800, 'Single Car Garage', '$2,245,000');
            INSERT INTO listings (address, bedrooms, washrooms, area, garage, cash) values ('797 GLENCAIRN AVE, TORONTO, ON M6B 2A2', 4, 4, 3800, 'Single Car Garage', '$1,998,000');
            INSERT INTO listings (address, bedrooms, washrooms, area, garage, cash) values ('1205 MARTIN\'S BLVD, BRAMPTON, ON L6Y 0A1', 4, 3, 4500, 'Dual Car Garage', '$1,499,900');
            INSERT INTO listings (address, bedrooms, washrooms, area, garage, cash) values ('442 HIDDEN TR, OAKVILLE, ON L6M 0N4', 3, 3, 4000, 'Dual Car Garage', '$1,449,950');
            INSERT INTO listings (address, bedrooms, washrooms, area, garage, cash) values ('75 PORTLAND ST #501, TORONTO, ON M5V 2M9', 3, 2, 2900, 'N/A', '$1,399,000');
        */
        
        
        $result = mysqli_query($connection, "SELECT * FROM listings");

        $rows = mysqli_fetch_all($result, MYSQLI_NUM); 

        for ($r = 0; $r < count($rows); $r += 1)
        {
            if ($r % 2 == 0)
            {
                echo "<div class=\"row\">";
            }
            
            echo "<div class=\"form-group col-xs-12 col-sm-6\">";
            echo "<p class=\"lowerp\">" , $rows [$r] [0] , "</p>";
            echo "<img class=\"img-fluid\" src=\"housing/house" , $r , "/1-tile.jpg\" alt=\"house\">";
            echo "<p>Bedrooms: " , $rows [$r] [1] , " | Washrooms: " , $rows [$r] [2] , " | SqFt: " ,  $rows [$r] [3] , "<br>";
            echo "Garage(s): " , $rows [$r] [4];
            echo "</p>";
            echo "<a href=\"housing.php?id=house" , $r , "\"> <button type=\"button\" class=\"btn btn-success btn-lg btn-block\">" , $rows [$r] [5] , "</button></a>";
            echo "</div>";

            if ($r % 2 == 1)
            {
                echo "</div>";
                echo "<div class=\"row mt-1\"></div>";
            }
        }

        mysqli_free_result($result);
        mysqli_close($connection);
        ?>

    </div>
    <script src="script.js"></script>
</body>
</html>

