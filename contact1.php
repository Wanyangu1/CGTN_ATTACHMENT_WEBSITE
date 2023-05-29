<?php
// database connection code
if(isset($_POST['firstname']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','transnzoia');

// get the post records

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$Idno = $_POST['Idno'];
$level = $_POST['level'];
$instituition = $_POST['instituition'];
$specialization = $_POST['specialization'];
$date = $_POST['date'];
$phonenumber = $_POST['phonenumber'];
$period = $_POST['period'];
$location = $_POST['location'];
$gender = $_POST['gender'];

// database insert SQL code
$sql = "INSERT INTO `details1` (`Id`, `fldfirstname`, `fldlastname`, `fldemail`, `fldIdno`, `fldlevel`, `fldinstituition`, `fldspecialization`,`flddate`, `fldphonenumber`, `fldperiod`, `fldlocation`, `fldgender`) VALUES ('0', '$firstname', '$lastname', '$email', '$Idno', '$level', '$instituition', '$specialization', '$date', '$phonenumber', '$period', '$location', '$gender')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
 
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>