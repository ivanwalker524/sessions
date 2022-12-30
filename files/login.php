<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: sans-serif;
        }
        .main{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 200px;
        }
        .profile{
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: black;

        }
        .flex{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .input > input{
            width: 300px;
            padding: 8px 10px;
            border-radius: 40px;
            margin: 8px 0;
            display: block;
            outline: none;
            border: 1px solid #333;
            font-size: 17px;
        }
       .input > input[type=submit]{
            background-color: #333;
            color: #fff;
        }
        .center{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .center a{
            text-decoration: none;
        }

    </style>
</head>
<body>
<?php
    if(isset($_POST['login'])){
        $user_data=array(
            'name'=> 'Mukiibi Peter',
            'id'=>19,
            'email'=>'coderscave1@gmail.com'
        );
        $_SESSION['user']=$user_data;
        header('location: ./');
    }
?>
   <div class="main">
        <div class="flex">
            <div class="profile">
                <img src="" alt="">
            </div>
            <h3>Ivan Walker</h3>
        </div>
        <form action="./?ref=login" method="post">
            <div class="input">
                <input type="text">
            </div>
            <div class="input">
                <input type="password">
            </div>
            <div class="input">
                <input type="submit" name="login" value="Login">
            </div>
            <div class="center">
                <a href="">Forgot Username / Password?</a>
            </div>
        </form>
   </div> 
</body>
</html>