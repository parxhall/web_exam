<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Thank You</h1>
    <p>Your message has been sent.</p>
    <h1>Oop!</h1>
    <p>Sorry there was an error.</p>

    <?php
    if (isset($_POST['send'])) {
        $to = 'paris.hall@nihr.ac.uk';
        $subject = 'Request';
        $message = 'Name: ' .$_POST['person_name'];
        echo $message;
    }
?>

</body>
</html>


