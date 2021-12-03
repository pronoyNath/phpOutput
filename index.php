<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <th>Email:</th>
                <th><input type="email" name="email"></th>
            </tr>
            <tr>
                <th>First Name:</th>
                <th><input type="text" name="fname"></th>
            </tr>
            <tr>
                <th>Last Name:</th>
                <th><input type="text" name="lname"></th>
            </tr>
            <tr>
                <th>Password:</th>
                <th><input type="password" name="pass"></th>
            </tr>
            <tr>
                <th><button>Save</button></th>
            </tr>
        </table>

    <?PHP
        foreach($_POST as $x){
            echo $x . '</br>';
        }
    ?>
    </form>
</body>
</html>