<html>
<head>
<title>Signup</title>
<link rel="stylesheet" href="main.css">
</head>
<body>

<?php
$u = $_POST["Username"];
$n = $_POST["Name"];
$d = $_POST["Dayofbirth"];
$m = $_POST["Monthofbirth"];
$y = $_POST["Yearofbirth"];

try 
{
    // Connect to the database
    $conn = new PDO("mysql:host=localhost;dbname=ephp011;", "ephp011","caemahah");

    // Set up exception-based error handling
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Send an SQL query to the database server
    $results = $conn->query("INSERT INTO ht_users (username, name, dayofbirth, monthofbirth, yearofbirth) VALUES ('$u', '$n', '$d', '$m', '$y')");

}
// Catch any exceptions (errors) thrown from the 'try' block
catch(PDOException $e) 
{
    echo "Error: $e";
}

{
    echo "<p>You have signed up with:<br />Name $n<br />Username $u<br />Date of birth $d $m $y</p>";
}

?>
</body>
</html>