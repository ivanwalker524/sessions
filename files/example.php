<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .nav{
        display: flex;
        flex-direction: column;
        width: 200px;
        background-color: chocolate;
        height: 100%;
    }
    .nav a{
        color: #fff;
        text-decoration: none;
        padding: 10px 3px;
    }
    .nav > a:hover,
    .nav > a.active{
        background-color: #fff;
        color: #333;
    }
    body{
        display: flex;
    }
</style>
<?php
    if(isset($_GET['ref']))
    $ref = $_GET['ref'];
    else $ref = "home";
?>
<body>
    <nav class="nav">
        <a href="example.php?ref=home" class="<?php if($ref == 'home') echo "active" ?>">Home</a>
        <a href="example.php?ref=about" class="<?php if($ref == 'about') echo "active" ?>">Contact</a>
        <a href="example.php?ref=resume">Projects</a>
    </nav>
    <div>
        <?php
            $file=$ref.".php";
            if(file_exists($file)) require "$file";
        ?>
    </div>
</body>
</html>