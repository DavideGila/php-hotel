<?php 
include __DIR__ . "/../Model/db.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>

<body>
    <header class="container">
        <h1>Hotels</h1>

        <form action="index.php" method="GET">
            <select class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="available"> 
                <option value="all">Tutti</option>
                <option value="0">Non Disponibile</option>
                <option value="1">Disponibile</option>
            </select>
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </header>