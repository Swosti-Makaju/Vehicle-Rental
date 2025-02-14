<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR</title>
    <link rel="stylesheet" href="css/addvehicle.css">
</head>

<body>

 

    <button id="back"><a href="adminvehicle.php">CANCEL</a></button>

    <div class="main">
        <div class="register">
            <h2>Enter Details Of New vehicle</h2>
            <form id="register" action="upload.php" method="POST" enctype="multipart/form-data">
                <label>Vehicle Name:</label><br>
                <input type="text" name="vehiclename" placeholder="Enter vehicle Name" required><br><br>

                <label>Vehicle Type:</label><br>
                <input type="text" name="vehicletype" placeholder="Enter Vehicle Type (e.g., Car, Bike, Scooter)"  required><br><br>

                <label>Fuel Type:</label><br>
                <input type="text" name="ftype" placeholder="Enter Fuel Type" required><br><br>

                <label>Capacity:</label><br>
                <input type="number" name="capacity" min="1" placeholder="Enter Capacity Of vehicle" required><br><br>

                <label>Price:</label><br>
                <input type="number" name="price" min="1" placeholder="Enter Price Of vehicle for One Day (in rupees)"
                    required><br><br>

                <label>Vehicle Image:</label><br>
                <input type="file" name="image" required><br><br>

                <input type="submit" class="btnn" value="ADD vehicle" name="addvehicle">
            </form>
        </div>
    </div>

</body>

</html>