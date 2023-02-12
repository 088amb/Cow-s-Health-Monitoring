<?php 
    require "connection.php"; 
    session_start();


if (isset($_POST['login'])) {
    $accesskey = $_POST['accesskey'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM user WHERE accesskey = '$accesskey' AND password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION['id'] = $row['accesskey'];
            $_SESSION['pass'] = $row['password'];
        }

        header('location:dashboard.php');
    }else{
?>
        <script> alert ("Invalid accesskey and password. Please try again."); </script>
    <?php
    }
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEARBRAND - Login</title>
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/4594/4594681.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="min-h-screen bg-white py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div>
                    <div>
                        <h1 class = "text-8xl font-Mochiy font-extrabold flex flex-wrap justify-center mb-3.5">MOO!</h1>
                    </div>
                        <form method="POST" class="font-Poppins py-8 text-base leading-6 space-y-4 text-black sm:text-lg sm:leading-7">
                            <div class="relative font-Poppins">
                                <input autocomplete="off" id="accesskey" name="accesskey" type="text" class="peer placeholder-transparent font-Poppins h-10 w-full border-b-2 border-black text-black focus:outline-none focus:borer-rose-600 mb-2.5" placeholder="Access Key" />
                                <label for="email" class="absolute font-Poppins left-0 -top-3.5 text-black text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Access Key</label>
                            </div>
                            <div class="relative font-Poppins">
                                <input autocomplete="off" id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-black text-black focus:outline-none focus:borer-rose-600" placeholder="Password" />
                                <label for="password" class="absolute left-0 -top-3.5 text-black text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label>
                            </div>
                            <div class="relative font-Poppins">
                                <input type="submit" name="login" value="LOGIN" class="w-full font-Poppins bg-black text-white rounded-md px-2 py-1 mt-5">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

