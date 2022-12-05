<!DOCTYPE html>
<html lang="en">

<head>
    <title>GFG- Store Data</title>
    <style>
        #pp{
            background-color:cyan;
            background-image:url("cafe.jpg");
            height : 100%;
            width : 100%;
            background-repeat:no-repeat;
            fit=cover;
        }
    </style>
</head>

<body id="pp">
    <center>
        <h1>Patient Registration Form</h1>
        <form action="insert.php" method="post">

            <p>
                <label for="username">User name:</label>
                <input type="text" name="username" id="username">
            </p>


            <p>
                <label for="password">Password:</label>
                <input type="text" name="password" id="password">
            </p>


            <p>
                <label for="Name">Name:</label>
                <input type="text" name="name" id="name">
            </p>


            <p>
                <label for="Address">Address:</label>
                <input type="text" name="address" id="address">
            </p>


            <p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="email">
            </p>
             
            <p>
                <label for="zipcode">Zipcode:</label>
                <input type="text" name="zipcode" id="zipcode">
            </p>

            <input type="submit" value="Submit">
        </form>
    </center>
</body>

</html>