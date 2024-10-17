<?php
include "../dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #343a40;
            color: #fff;
            padding: 10px 20px;
        }

        .navbar-brand {
            font-size: 1.5rem;
        }

        .navbar-toggler {
            border: none;
            background-color: transparent;
            color: #fff;
            font-size: 1.2rem;
        }

        .navbar-nav .menu-item {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
            margin-right: 20px;
        }

        .container{
            padding: 50px;
        }

        .navbar-nav .menu-item:hover {
            color: #ffc107;
        }

        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        @media (max-width: 768px) {
            .navbar-nav {
                margin-top: 10px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .navbar-nav .menu-item {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link menu-item" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-item" href="users.php">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-item" href="transactions.php">Transactions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link menu-item" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>