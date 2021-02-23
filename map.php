<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@500;700&family=Lobster&display=swap&family=Nunito:wght@700&display=swap">
    <link rel="stylesheet" href="map.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJv2ntHCZf91oey9DlR0LTiA3zZhRlK-U&callback=initMap" defer></script>
    <script src="script.js" defer></script>
    
    <script>
        var geocoder;
        var gmap;
        var mIcon;

        function initMap() 
        {
            geocoder = new google.maps.Geocoder();
            
            gmap = new google.maps.Map(document.getElementById('map'), 
            {
                center: new google.maps.LatLng(43.751666, -79.398956),
                zoom: 5
            });

            var mIcon = 
            {
                path: google.maps.SymbolPath.CIRCLE,
                fillOpacity: 1,
                fillColor: '#fff',
                strokeOpacity: 1,
                strokeWeight: 1,
                strokeColor: '#333',
                scale: 12
            };

<?php

    $connection = mysqli_connect("localhost", "eku", "FeictInd", "eku");

    if (mysqli_connect_errno())
    {
        echo "Failed to connect.";
        exit();
    }

    $result = mysqli_query($connection, "SELECT * FROM listings");

    $rows = mysqli_fetch_all($result, MYSQLI_NUM); 
    
    for ($r = 0; $r < count($rows); $r += 1)
    {
        echo "addressToLatLng(\"", $rows [$r] [0], "\", \"", $r, "\");";
    }

echo <<<EOF
    }

    function addressToLatLng (address, index)
        {
            geocoder.geocode( {address:address}, function(results, status) 
            {
                if (status == google.maps.GeocoderStatus.OK) 
                {
                    new google.maps.Marker(
                    {
                        map: gmap,
                        position: results[0].geometry.location,
                        title: address,
                        icon: mIcon,
                        
                        label: 
                        {
                            color: '#000',
                            fontSize: '12px',
                            fontWeight: '600',
                            text: index
                        }
                    });
                } 
                else 
                {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }
    </script>
</head>

<body style="width: 100%">
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
    <h1 style="color:White;" class="titlecard"> <b>LOCATIONS</b></h1>

    <div class="container-fluid center" style="width: 100%">

        <div class="row mt-4"> </div>

        <div class="row" style="width: 100%"> 
            <div class="form-group col-xs-12 col-md-8" style="width: 100%">
                <div id="map"></div>
            </div>

            <div class="form-group col-xs-12 col-md-4">
                
                <div class="form-group col-xs-12 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header" style="background-color: #C6D4FF"> Featured </div>
                        <ul class="list-group list-group-flush">
EOF;

    for ($r = 0; $r < count($rows); $r += 1)
    {
        echo "<li class=\"list-group-item\">";
        echo "<a href=\"housing.php?id=house", $r, "\">";
        echo "<p>", $rows [$r] [0], "</p>";
        echo "<img class=\"img-fluid\" src=\"housing/house", $r, "/1.jpg\" alt=\"house\">";
        echo "</a>";
        echo "</li>";
    }

    mysqli_free_result($result);
    mysqli_close($connection);

?>
                        </ul>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</body>
</html>