<?php
if(isset($_GET['ref']))
$ref = $_GET['ref'];
else $ref = "home";
?>
<nav class="nav">
    <div style="background-color: #420b34; color: #fff; padding: 10px;">
        User: <?=$_SESSION['user']['name']?>
    </div>
    <a href="?ref=home" class="<?php if($ref == 'home') echo "active" ?>">Home</a>
    <a href="?ref=about" class="<?php if($ref == 'about') echo "active" ?>">Contact</a>
    <a href="?ref=project" class="<?php if($ref == 'project') echo "active" ?>">Projects</a>
    <a href="?logout">Logout</a>
</nav>
<div style="flex-grow: 1; height: 100%; overflow-y: scroll; overflow-x: hidden;">
    <?php
    $file="files/". $ref.".php";
    if(file_exists($file)) require "$file";
    ?>
</div>
