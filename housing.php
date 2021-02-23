<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="housing.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@500;700&family=Lobster&display=swap&family=Nunito:wght@700&display=swap"
      rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

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
    <?php
                         
        $connection = mysqli_connect("localhost", "asaada", "klovjaUb", "asaada");

        if (mysqli_connect_errno())
        {
            echo "Failed to connect.";
            exit();
        }
        
        $result = mysqli_query($connection, "SELECT * FROM housing WHERE link='" . $_GET['id'] . "'");

        $rows = mysqli_fetch_array($result, MYSQLI_NUM); 
    
    echo "<div class=\"titlecard\" style=\"\"><b><h2>" , $rows [8] , "</b></h2> </div> ";
    // echo "<div class=\"titlecard\" style=\"background-image: url(\"housing/" , $_GET['id'] , "/1.jpg\");\"><b><h2>" , $rows [8] , "</b></h2> </div> ";

    echo "<div class=\"container-fluid center\">";

    echo"<div class=\"row mt-4\"></div>";

    echo"<div class=\"row\">";
    echo"<div class=\"form-group col-xs-12 col-md-8 d-flex justify-content-center\">";
    echo"<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\" style=\"max-width:900px;\">";

    echo"<div class=\"carousel-inner\">";
    echo"<div class=\"carousel-item active\">";


    echo "<img class=\"d-block w-100\" src=\"housing/" , $rows [0] , "/1.jpg\" alt=\" 1 Slide\">"; 
    echo "</div>";
                        
                                 
    for ($i = 2; $i <= $rows[1]; $i += 1)
    {
        echo "<div class=\"carousel-item\">";   
        echo "<img class=\"d-block w-100\" src=\"housing/" , $rows [0] , "/" , $i , ".jpg\" alt=\"" , $i , " Slide\">";            
        echo "</div>";
    }

echo <<<EOF

        </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="form-group col-xs-12 col-md-4"> 
EOF;

if ($rows [2] == "john")
{
    echo <<<EOF
        <p> <img class="realtor" src="realtors/messi-face.png" alt="Realtors" style="border-radius: 15px 15px 15px 15px;">
        Realtor: Leonel Santiago <br> <br>
        Fax: 647-111-1313 <br>
        Phone: 416-141-4141 <br>
        Email: leo.santiago@skyReal.com <br>
        </p>
EOF;
}
else
{
    echo <<<EOF
        <p> <img class="realtor" src="realtors/marissa-face.png" alt="Realtors" style="border-radius: 15px 15px 15px 15px;">
        Realtor: Choir Williams <br> <br>
        Fax: 647-111-2020 <br>
        Phone: 416-112-1111 <br>
        Email: choir.williams@skyReal.com <br>
        </p>
EOF;
}

    echo <<<EOF
        <br>
            <div class="tablebackground">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="tabletitle" colspan="12" scope="col">Summary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Rooms: </th> 
                            
EOF;

    echo "<td>" , $rows [3] , "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th scope=\"row\">Bathrooms: </th>";
    echo "<td>" , $rows [4] , "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th scope=\"row\">Parking: </th>";
    echo "<td>" , $rows [5] , "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th scope=\"row\">Area: </th>";
    echo "<td>" , $rows [6] , "Ft<sup>2</sup></td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

    echo "<div class=\"row\">";
    echo "<div class=\"col-xs-12 col-md-8\">";
    echo "<p>" , $rows [7] , "</p>";
    echo "</div>";
    echo "</div>";

    echo "<br><br>";

    echo "<div class=\"row\">";
    echo "<div class=\"col-xs-12 col-md-8\">";
    echo "<div class=\"tablebackground\">";
    echo "<table class=\"table\">";
    echo "<thead>";
    echo "<tr>";
    echo "<th class=\"tabletitle\" colspan=\"12\" scope=\"col\">Full Overview</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    
    echo "<th scope=\"row\">Location: </th>";
    echo "<td>" , $rows [8] , "</td> </tr>";

    echo "<tr>";
    echo "<th scope=\"row\">Area: </th>";
    echo "<td>~" , $rows [6] , "Ft<sup>2</sup></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th scope=\"row\">Rooms: </th>";
    echo "<td>" , $rows [3] , "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th scope=\"row\">Bathrooms: </th>";
    echo "<td>", $rows [4] , "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th scope=\"row\">Dining Area: </th>";
    echo "<td>" , $rows [9] , "</td>";
    echo "</tr>";               
    echo "</tbody>";

    echo "<thead>";
    echo "<tr>";
    echo "<th class=\"tabletitle\" colspan=\"12\" scope=\"col\">Exterior</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<th scope=\"row\">Levels: </th>";
    echo "<td>" , $rows [10] ,  " Stories</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th scope=\"row\">Garage: </th>";
    echo "<td>" , $rows [11] , " Car(s)</td>";
    echo "</tr>";   
    echo "<tr>";
    echo "<th scope=\"row\">Driveway: </th>";
    echo "<td>" , $rows [12] ," Car(s)</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th scope=\"row\">HVAC: </th>";
    echo "<td>" , $rows [13] , "</td>";
    echo "</tr>";
    echo "</tbody>";

    echo "<thead>";
    echo "<tr>";
    echo "<th class=\"tabletitle\" colspan=\"12\" scope=\"col\">Extras</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<th scope=\"row\">Has Pool: </th>";
    echo "<td>", $rows [14] ,"</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th scope=\"row\">Has Waterfront: </th>";
    echo "<td>", $rows [15] ,"</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th scope=\"row\">HOA membership: </th>";
    echo "<td>", $rows [16] ,"</td>";
    echo "</tr>";  
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</div>";

    echo "</div>";

    mysqli_free_result($result);
    mysqli_close($connection);

    /* SQL commands
        use eku

        CREATE TABLE housing(link varchar(32) NOT NULL, length INT, realtor varchar(32) NOT NULL, rooms TEXT NOT NULL, bathrooms varchar(32) NOT NULL, parking varchar(32) NOT NULL, area INT, descrip TEXT NOT NULL, location varchar(128) NOT NULL, dining varchar(128) NOT NULL, stories INT,  garage INT, driveway INT, hvac varchar(8) NOT NULL, pool varchar(8) NOT NULL, waterfront varchar(8) NOT NULL, membership varchar(8) NOT NULL);

        INSERT INTO housing (link, length, realtor, rooms, bathrooms, parking, area, descrip, location, dining, stories, garage, driveway, hvac, pool, waterfront, membership) values ('house0', '8', 'Leonel', 'Primary Bedroom, Second level, 7.02 m X 5.79 m; Bedroom 2, Second level, 4.57 m X 3.97 m; Bedroom 3, Second level, 6.1 m X 4.27 m; Bedroom 4, Second level, 4.27 m X 4.27 m; Recreational, Games room, Basement, 7.62 m X 5.18 m', '7;  7 full baths', '9; 3 Garage', 8000, 'Absolutely Spectacular Modern Masterpiece Situated On Large Estate Lot In Prestigious Bayview Glen!! Nestled In A Serene Muskoka-Like Setting & Filled W/ Natural Light, This Home Features Approx 8,000 S/F Of Open Living Space, Soaring Ceilings (10'' Main, 10'' Upper, 9'' Bsmt), 5 Bdrms, 7 Bathrooms, Gourmet Kitchen W/Integrated Appliances & Large Centre Island, Finished W/O Bsmt Complete W/ Nanny Suite, Backyard Oasis W/ In-Ground Pool & Much More!!!**** EXTRAS **** ** Sub-Zero Fridge, Wolf Cooktop, Dacor Wall Oven & Microwave, B/I Dishwasher, Washer & Dryer, 2 Furnaces, 2 Central A/C Units, Inground Pool & Equipment', '14 SEINECLIFFE RD, MARKHAM, ON L3T 1K4', 'Eating area, Ground level, 5.49 m X 4.57 m; Family room, Ground level, 5.49 m X 3.96 m', 2, 3, 3, 'Included', 'Yes', 'No', 'No');
        INSERT INTO housing (link, length, realtor, rooms, bathrooms, parking, area, descrip, location, dining, stories, garage, driveway, hvac, pool, waterfront, membership) values ('house1', '6', 'Leonel', 'Kitchen, Second level, 3.3 m X 2.6 m; Family room, Second level, 4.3 m X 4 m; Sunroom, Second level, 3.4 m X 2.3 m; Bedroom, Second level, 4.1 m X 3.65 m; Bedroom, Second level, 3.1 m X 2 m', '5; 3 full baths', '6; 2 Garage', 4100, 'Incredible Investment Opportunity Or Easily Convert Back To Grand Single-Family Residence In A High Demand Neighbourhood. Large Detached Home W/ Nanny Suite In Bsmt & A Separate Entrance, Private Double Drive Parking. Great Open Concept Layout, Corner Lot W/ Spacious Backyard. Close To All Amenities, Public Transit & Schools. Second Flr Is Vacant. A Must See!!!**** EXTRAS **** 3 Fridges, 3 Stoves, 2 Dishwashers, 3 Washer, Dryer, 3 Separate Hydro Meters, Thermal Windows, Private Wood Fence & Garden Shed, All Elf''s.', '126 PRINCESS ANNE CRES, TORONTO, ON M9A 2R6', 'Kitchen, Main level, 3.1 m X 2.4 m; Bedroom, Main level, 4.9 m X 3.5 m', 2, 2, 4, 'Included', 'No', 'No', 'No');
        INSERT INTO housing (link, length, realtor, rooms, bathrooms, parking, area, descrip, location, dining, stories, garage, driveway, hvac, pool, waterfront, membership) values ('house2', '6', 'Choir', 'Living room, Second level, 4.4 m X 3.82 m; Kitchen, Second level, 3.97 m X 3.01 m; Primary Bedroom, Second level, 4.49 m X 3.21 m; Bedroom 2, Second level, 3.77 m X 2.82 m; Bedroom 3, Second level, 3.63 m X 3 m', '5; 3 full baths', '3; 1 Garage', 3800, 'Stunning Completely Turnkey Five Unit Investment Property On Huge Lot W/Double Car Garage & Triple Private Drive. Fully Reno''d In 2009. Two Lrg 3 Bdrm Units Reno''d Kitc.& Washrm, Flrs, Doors, Etc. Two 1 Bdrm Units & One Bach. Great Income Approx 68K(Potential 90K+) With 50K Solid Net Return(Potential 70K+). See Financials. On Site Laundry Rm. Parking For 9 Cars. Beautiful Yard W/ Gazebo. 3 Entrances. Close To Go Station, Gardiner. 10 Min To Airport/Downtown,**** EXTRAS **** Elf''s & Wind Covs. 5 Fridges,4 Stoves,Coin Op.Washer/Dryer, A/C Units, Gazebo. Shingles 2020, Beautiful Units W/Great Tenants! 3 Entrances. Current Rents Below Market Value. Large Private Lot. Turnkey Investment', '478 ANNETTE ST, TORONTO, ON M6P 1S2', ' Kitchen, Basement, 3.8 m X 3.2 m; Living room, Main level, 4.4 m X 3.82 m; Kitchen, Main level, 3.97 m X 3.01 m', 2, 1, 2, 'Included', 'No', 'No', 'Yes');
        INSERT INTO housing (link, length, realtor, rooms, bathrooms, parking, area, descrip, location, dining, stories, garage, driveway, hvac, pool, waterfront, membership) values ('house3', '6', 'Leonel', 'Bedroom, Lower level, 3.24 m X 2.54 m; Living room, Lower level, 5.79 m X 5.64 m; Laundry room, Lower level, 2.1 m X 1.55 m; Cold room, Lower level; Living room, Main level, 5.18 m X 3.81 m', '4; 2 full baths', '3; 1 Garage', 3800, 'Custom Built Meticulous Attention To Detail Detached Brick 3+1 Bedroom With Separate Entrance Basement. 9'' Ceilings Open Concept Main Floor Living. Modern Custom Kitchen, Walk-Out To Deck. Master Bedroom Vaulted Ceiling W/5 Pc Ensuite & Walk/In Closet. 3 Skylights On Top Floor. Soaring 11'' Ceilings On Lower Level, Heated Floors & Walk-Up To Fully Landscaped Backyard With Custom Pool, Hot-Tub, Pool House, Fenced Backyard. Access To Garage From Basement.**** EXTRAS **** S/S Fridge, B/I Oven, B/I Microwave, B/I Dishwasher, Mini Fridge(B), Gas Range, Washer/Dryer. All Elf''s/Window Coverings. Heat Flrs Basement & All Bathrooms. Survey. Hwt(O).', '797 GLENCAIRN AVE TORONTO, ON M6B 2A2', 'Kitchen, Main level, 5.64 m X 4.37 m; Dining room, Main level, 3.81 m X 3.05 m; Family room, Main level, 5.64 m X 3.15 m;', 2, 1, 2, 'Included', 'No', 'No', 'No');
        INSERT INTO housing (link, length, realtor, rooms, bathrooms, parking, area, descrip, location, dining, stories, garage, driveway, hvac, pool, waterfront, membership) values ('house4', '5', 'Choir', 'Primary Bedroom, Second level, 5.53 m X 3.87 m; Recreational, Games room, Lower level, 5.73 m X 3.66 m; Exercise room, Lower level, 3.45 m X 3.76 m; Living room, Lower level, 4.81 m X 3.45 m; Bedroom 4, Lower level, 3.39 m X 2.82 m', '3; 2 full baths', '6; 2 Garage', 4500, 'Gorgeous Luxurious Bungaloft In The Highly Sought Area Of Princess Anne Manor! Completely Rebuilt, Over 4,100 Sqft Of Living Space. Gourmet Chef''s Kit. Highlighted By 9 Ft Centre Island & W/O To Private Lndscpd Stoned Patio. 2 Master Br W/ 4Pc Ensuite & W/I Closets. Spacious Lwer-Level Offrs Rec.Rm, Exercise Rm & 4th Br. Sep. Entrance To Private 1-Br Nanny/In-Law Suite. Prime Location Close To Boutique Shps,Best Schools,Golf, Malls,Hwys,Airport & Dwntwn.**** EXTRAS **** Move Right In! Excellent School District. *Existing Appl: Sub-Zero Fridge, Sub-Zero Wine-Fridge, Wolf Stove, Miele Dishwasher, 2X Samsung W/D. See Attachment For Full List Of Inclusions & Exclusions.', '1205 MARTIN’S BLVD, BRAMPTON, ON L6Y 0A1', 'Kitchen, Lower level, 3.21 m X 2.25 m; Dining room, Main level, 3.96 m X 3.76 m; Kitchen, Main level, 5.29 m X 4.24 m;', 2, 2, 4, 'Included', 'No', 'No', 'Yes');
        INSERT INTO housing (link, length, realtor, rooms, bathrooms, parking, area, descrip, location, dining, stories, garage, driveway, hvac, pool, waterfront, membership) values ('house5', '6', 'Choir', 'Recreational, Games room, Lower level, 6 m X 8.28 m; Utility room, Lower level, 18.8 m X 4.86 m; Family room, Main level, 4.43 m X 5.71 m; Dining room, Main level, 3.41 m X 3.68 m; Kitchen, Main level, 3.84 m X 4.42 m', '3; 2 full baths', '2; 4 Garage', 4000, 'Oakville Mstrpce! Gorgeous,Custom Markay-Built Hms,3Bdrm 3Bth Detchd Bungaloft Loaded W/Premium Upgrds! Incrdble Opn Concpt L/O W/Beautiful Kit. W/Granite Countrs/Islnd/Brkfst Bar/Dedicated Eat-In Brkfst Area,Fam.Rm W/Gas F/P,15 Ft Vaultd Ceiling & W/O To Private Oasis/Yrd Perfect For Entertaining & Relaxing,Frml Dining Rm,Lrg Mastr Retreat W/His/Hers Closets/5Pc Ensuite,Lrg Office/Den/Potential 4th Bdrm,Huge Dual-Winged Bsmt W/Hlf Finishd Rec Rm W/Gas F/P W/**** EXTRAS **** Tons Of Storage,Gleamng Hrdwd T/Out & Superior Finishes,Near All Amenities,Shws 10++! Wow! All Elf''s,Wndw Covrs/Cali.Shutters, All Appl:S/S Kitchn-Aid Frdge/Stve/Hood Fan/Dw/Micro,Furnace,Cac,Gdo+2 Remotes,Gas Line(Bbq),Hwt(R) Exc:Bsmt Frz', '442 HIDDEN TR, OAKVILLE, ON L6M 0N4', 'Eating area, Main level, 2.7 m X 3.63 m; Kitchen, Main level, 3.84 m X 4.42 m', 2, 2, 4, 'Included', 'No', 'No', 'Yes');
        INSERT INTO housing (link, length, realtor, rooms, bathrooms, parking, area, descrip, location, dining, stories, garage, driveway, hvac, pool, waterfront, membership) values ('house6', '6', 'Leonel', 'Primary Bedroom, Second level, 4.05 m X 3.25 m; Bedroom 2, Second level, 3.65 m X 2.45 m; Living room, Main level, 6.85 m X 4.28 m; Dining room, Main level, 6.85 m X 4.28 m; Kitchen, Main level, 3.1 m X 2.54 m', '2; 2 full baths', 'N/A', 2900, 'From Designer Philippe Starck Comes The Award-Winning Seventy5 Portland,The Crown Jewel Of King W. Rarely Offered 2Bdrms Plus Office,2Storey,Loft-Style Corner Ste. Largest Unit On The Flr In This Exclusive Boutique Bldg,19-Ft Flr-To-Ceiling Wndws,Upgraded Hunter-Douglas Motorized Wndw Coverings&Chef''s Scavolini Kit,Lge Master W/Ensuite,Custom His&Hers California Closets,2nd Bdrm(W/Sep Entrance!),Lge Balcony, Pot Lights,Glass-Lined Stairs&Master Juliet Balcony**** EXTRAS **** Stainless Steel(Fridge,Stove,D/W,Microwave,Hood Fan) Stacked Washer/Dryer, All Elf''s, All Window Coverings & Crystal Chandeliers Included. Work From Home And Entertain Your Bubble In The Condo Space That Feels Like A House!', '75 PORTLAND ST #501, TORONTO, ON M5V 2M9', 'Den, Main level, 3 m X 2.45 m', 1, 0, 0, 'Included', 'Yes', 'Yes', 'Yes');
    */
    ?>

    </div>
    <script src="script.js"></script>
</body>