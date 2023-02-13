<?php
    require "connection.php";
    $url = $_GET['id'];
    if(isset($_GET['id'])){
        $sql = "SELECT * FROM cowdata WHERE id = '$url'";
        $result = $conn->query($sql);
        $fields = $result->fetch_assoc();
        $date = $fields['date'];
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOO! - COW1001</title>
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/4594/4594681.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="bg-white pt-10 pl-20 pr-20 pb-5 ml-1 font-Poppins">
        <div class="flex justify-between"> 
            <h1 class="font-bold text-5xl text-dark mt-3 mb-2"><?= $fields['cowid'] ?> <span class="text-green-600"><?= strtoupper($fields['status']) ?></span></h1>
            <a href="dashboard.php"><button class="text-[#000000] text-semibold text-2xl mr-7 mt-5">Back</button></a>
         </div>
         <div class="flex justify-between">
         <h2 class="text-2xl text-gray-500 mt-2 mb-2"><?= $date?></h2>
         </div>
    </section>
    
    <section class = "pt-1 pl-20 pr-20 bg-white relative overflow-hidden font-Poppins font-semibold">
        <div class = "flex justify-between">
            <h2 class = "ml-2 text-3xl">Temperature</h2>
            <h2 class = "mr-[500px] text-3xl">Heart Rate</h2>
        </div>

        <div class="grid max-w-10xl grid-cols-10 gap-7 p-1 font-Poppins">
            <div class="col-span-12 border-2 border-[#000] bg-white sm:col-span-5 justify-center">
                <div class = "flex justify-between">
                    <div>
                        <p class="text-8xl pt-20 pl-20"><?= $fields['temperature']?>°</p>
                        <p class="text-4xl font-normal pt-2 pb-20 pl-20">Celcius</p>
                    </div>
                    <div>
                        <p class="text-8xl pt-20 pl-16 pr-24">97.78</p>
                        <p class="text-4xl text-medium font-normal pt-2 pb-20 pl-24">Fahrenheit</p>
                    </div>
                 </div>
            </div>

        <div class="col-span-12 border-2 border-[#000] bg-white sm:col-span-5 justify-center">
            <div class = "flex justify-between">
                <div>
                    <p class="text-8xl pt-20 pl-[120px]"><?= $fields['heartrate'] ?></p>
                    <p class="text-4xl font-normal pt-2 pl-[120px]">bpm</p>
                </div>
                <div>
                    <img src = "https://cdn-icons-png.flaticon.com/512/2711/2711193.png" class = "w-[350px] pt-[25px] pr-[100px]">
                </div>
             </div>
        </div>
    </section>

    <section class = "mt-7 mb-10 pt-1 pl-20 pr-20 bg-white relative overflow-hidden font-Poppins font-semibold">
        <div class = "flex justify-between">
            <h2 class = "ml-2 text-3xl">Respiration Rate</h2>
            <h2 class = "mr-[475px] text-3xl">Step Counts</h2>
        </div>

        <div class="grid max-w-10xl grid-cols-10 gap-7 p-1 font-Poppins">
            <div class="col-span-12 border-2 border-[#000] bg-white sm:col-span-5 justify-center">
                <div class = "flex justify-between">
                    <div>
                        <p class="text-8xl pt-20 pl-24"><?= $fields['respiration'] ?></p>
                        <p class="text-4xl font-normal pt-2 pb-2 pl-24">bpm</p>
                    </div>
                    <div>
                        <p class="text-8xl pt-20 pl-2 pr-24">70%</p>
                        <p class="text-4xl font-normal pt-2 pl-28">Percent</p>
                    </div>
                 </div>
            </div>

        <div class="col-span-12 border-2 border-[#000] bg-white sm:col-span-5 justify-center">
            <div class="flex justify">
                <div>
                    <p class="text-8xl pt-20 pl-20 pb-2 pr-20"><?= $fields['stepscount'] ?></p>
                    <p class="text-4xl font-normal pt-2 pl-20 pb-20 pr-20">Step Counts</p>
                </div> 
                <div>
                    <img src="https://cdn-icons-png.flaticon.com/512/2395/2395796.png" class="w-[100px] pt-10 pr-20">
                </div>
            </div>

            </div>
        </div>
    </section>

    <section class = "mt-7 mb-36 pt-1 pl-20 pr-20 bg-white relative overflow-hidden font-Poppins font-semibold">
        <div class = "flex justify-between">
            <h2 class = "ml-1 mb-3 text-3xl">Location</h2></div>
            <img src="https://cs2.gamemodding.com/images/750x407/253324534560bf9caab7e2279755f20bddfe1cde6c1704a1dafa0dd9b91bd3a8.webp" class="ml-1 w-full h-96" alt="..."/>
    </section>

    <footer class="bg-[#000] mt-10">
        <div class="max-w-lg bg-[#000] px-4 pt-24 py-8 mx-auto text-left md:max-w-none md:text-center">
             <h1 class="text-3xl font-extrabold leading-10 tracking-tight text-white text-center sm:leading-none md:text-6xl lg:text-7xl"><span class="inline md:block text-8xl font-Mochiy">MOO!</span></h1>
             <h2 class="font-Poppins text-white mt-7">Copyright. All rights reserved.</h2>
             <h2 class="font-Poppins text-white">Powered by Team ni Paula Angelica Penaflorida</h2>
             <div class="mx-auto rounded-lg font-black mt-5 text-zinc-400 md:mt-12 md:max-w-lg text-center lg:text-lg"></div>
        </div>
     </footer>

</body>
</html>