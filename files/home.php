<div style="display: flex; flex-direction:column; max-width:700px; margin:0 auto; align-items:center;">
    <h1>This is Home section</h1>
    <nav>
        <a href="./?section=reg">Register</a>
        <a href="./?section=vote">Vote</a>
    </nav>
</div>
<?php
    if(isset($_GET['section']))
    $section=$_GET['section'];
    else $section = 'reg';

    if($section == 'reg'){
        echo "<h1>This is the registration part<h1>";
    }
    if($section  == "vote"){
        echo "<h1>Cast your vote here</h1>";
    }
?>