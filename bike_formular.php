<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <h1>Rent a bike</h1>
    <form action = "bike_formular.php" method = "post"> 

        <p>CUSTOMER:</p>
        <label for = "customerID"> ID:</label><br>
        <input type = "text" name = customerID><br><br>

        <label for = "first_name"> first name:</label><br>
        <input type = "text" name = first_name><br><br>

        <label for = "last_name"> last name:</label><br>
        <input type = "text" name = last_name><br><br>

        <label for = "address"> address:</label><br>
        <input type = "text" name = address><br><br>

        <label for = "phone"> phone:</label><br>
        <input type = "text" name = phone><br><br>

        <label for = "email"> E-Mail:</label><br>
        <input type = "text" name = email><br><br>
        

        
        <!--<p>BIKE:</p>
        <label for = "bikeID"> ID:</label><br>
        <input type = "text" name = bikeID><br><br>

        <label for = "model"> model:</label><br>
        <input type = "text" name = model><br><br>

        <label for = "typ"> typ:</label><br>
        <input type = "text" name = typ><br><br>

        <label for = "bike_status"> bike status:</label><br>
        <input type = "text" name = bike_status><br><br>

        <label for = "availability"> available:</label><br>
        <input type = "text" name = availability><br><br>

        <label for = "battery"> battery:</label><br>
        <input type = "text" name = battery><br><br>

        <label for = "gears"> gears:</label><br>
        <input type = "text" name = gears><br><br>

        <label for = "suspension"> suspension:</label><br>
        <input type = "text" name = suspension><br><br>-->

        <input type="reset">
        <input type="submit"><br><br>

        <?php
        $con = @new mysqli("localhost", "root", "blabla.bumbum", "bikerental");
        if($con -> connect_error)
        exit("connection error");

        $sql =  "INSERT INTO customer (customerID, first_name, last_name, phone, email) VALUES (2, '?', '?', '?', '?')";
                //"SELECT * FROM customer";
        if($res = $con -> query($sql))
        {
            if($res -> num_rows == 0)
                echo "no result";
        

            while ($dsatz = $res -> fetch_assoc())
                echo $dsatz["customerID"] . ","
                . $dsatz["first_name"] . ","
                . $dsatz["last_name"] . ","
                . $dsatz["address"] . ","
                . $dsatz["phone"] . ","
                . $dsatz["email"] . "<br>";

            $res -> close();
        }

        else
            exit("query error");
            $con -> close();
        ?>
</form>
</body>
</html>

