<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$date = $_POST['date'];


$conn = new mysqli("localhost", "asaada", "klovjaUb", "asaada");

if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} else {
    $stmt = $conn->prepare("INSERT Into tours (fname, lname, address, date) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fname, $lname, $address, $date);
    $execval = $stmt->execute();
    

    $stmt->close();
    $conn->close();

    header("Location: https://webdev.scs.ryerson.ca/~asaada/530term/tour.php");
    exit();
}

?>