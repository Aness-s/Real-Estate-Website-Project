<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@500;700&family=Lobster&display=swap&family=Nunito:wght@700&display=swap"
      rel="stylesheet"
    />
    <title>Book A Home Tour</title>
</head>
<body>
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
    <h1 class="titlecardTour"> <b>REGISTER FOR AN OPEN HOUSE</b></h1>

    </br>
    <div class="container">
        <form name="myForm" action="insert.php" onsubmit="return validateForm()" method="POST">
            <div class="row">
            <div class="col-25">
                <label for="fname">First Name:</label>
            </div>
            <div class="col-75">
                <input type="text" id="fname" name="fname" placeholder="First" required>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <label for="lname">Last Name:</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="lname" placeholder="Last" required>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <label for="address">Home Address:</label>
            </div>
            <div class="col-75">
                <input type="text" id="address" name="address" placeholder="Address" required>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <label for="date">Date: </label>
            </div>
            <div class="col-75">
                <input type="text" id="date" name="date" placeholder="YYYY-MM-DD" required>
            </div>
            </div>
            <div class="row">
            <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    </br></br></br></br>
    <h1 style="text-align:center;">Existing Open House Registrations</h1>
    </br>
    <table id="tours">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Date</th>
        </tr>   
        
        <?php
            $mysqli = new mysqli("localhost", "asaada", "klovjaUb", "asaada");

            if ($mysqli -> connect_errno){
                echo "Connection Fail: " . $mysqli -> connect_errno;
                exit();
            }

            $commandText = "SELECT fname, lname, address, date FROM tours";
            $result = $mysqli->query($commandText);

            if ($result){

                print("<br/>");
                
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<tr><td>". $row["fname"] . "</td><td>". $row["lname"] . "</td><td>". 
                     $row["address"] . "</td><td>". $row["date"] . "</td></tr>";

                }
                
                $result->close();
            }

            $mysqli->close();

        ?>
    </table>
    </br></br>
    <script src="script.js"></script>

</body>
</html>