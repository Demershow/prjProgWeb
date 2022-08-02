
<?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "usbw";
    $myDB= "dbDemerson";

    try
    {
        $conn = new PDO("mysql:host=$servername; dbname=$myDB", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "boa";
    }

    catch(PDOException $e){
        echo "burro <br>" . $e->getMessage();
    }
?>