<?php
    require("connect.php")
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name ="viewport" content = "width-device-width, initial-scale=1,shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hotel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="facilities.php">View Room</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="bookRoom.php">Booking</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="registerCustomer.php">Register</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="confirmTransaction.php">Transaction</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="map.php">Our Branch</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="email.php">Contact Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
        
    </body>
</html>