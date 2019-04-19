<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PinVen | Pinjam Inventaris </title>
    <style>
        form {
            margin: 10rem;
            padding: 1rem;
        }
        *{
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        input {
            width: 16.35%;
            padding: .5rem;
            margin : .5rem;
        }
        input.search{
            border: none;
            height: 2rem;
            width: 10%;
            background-color: #3b3b3b;
            color: aliceblue;
        }
        h1.logo {
            font-size: 3em;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;
            padding: .6rem;
        }
        p.header {
            font-size: 1em;
            padding: .2rem;
            font-weight: 300;
        }
        a{
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>
    <?php require_once "partial/_header.php" ?>

        <form align="center" action="login-pegawai.php" method="post">
            <input class="login-form" type="text" placeholder="NIP" name="user" id=""><br>
            <input class="login-form"type="password" name="pass" id="" placeholder="Password"><br>
            <input class="search" name="submit" type="submit"  value="LOG IN">
        </form>
        <p style="margin:1rem" align="center"><a href="loginMaster.php">Login Sebagai Petugas</a></p>
</body>
</html>