<?php
   require "connection.php";
   require "session.php";

   $sql = "SELECT * FROM cowdata";
   $result = mysqli_query($conn,$sql);

   if(mysqli_num_rows($result) > 0){
      while($row = $result->fetch_array()){
         $cowname = $row['cowid'];
         $date = $row['date'];
         $status = $row['status'];
         $temperature = $row['temperature'];
         $heartrate = $row['heartrate'];
         $respiration = $row['respiration'];
         $stepCount = $row['stepscount'];
         $location = $row['location'];
      }
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEARBRAND - Dashboard</title>
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/4594/4594681.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script defer src="status.js"></script>

</head>
<body>
   <h2>HELLO MOTHERFUCKERS</h2>
    <section class="bg-white p-10 font-Poppins">
        <div class="flex justify-between"> 
            <h1 class="font-bold text-7xl  text-dark mt-3 mb-2">HEALTH <span class="text-gray-700">STATUS</span></h1>
            <a href = "logout.php"><button class="text-[#000000] text-semibold text-2xl mt-8 mr-3">LOGOUT</button></a>
         </div>
         <div class="flex justify-between">
         <h2 class="text-2xl text-gray-500 mt-2 mb-2">Total No. of Cows: 69</h2>
         <style>
            dialog[open] {
            animation: appear .15s cubic-bezier(0, 1.8, 1, 1.8);
          }
            dialog::backdrop {
              background: linear-gradient(45deg, rgba(0, 0, 0, 0.5), rgba(54, 54, 54, 0.5));
              backdrop-filter: blur(3px);
            }
          @keyframes appear {
            from {
              opacity: 0;
              transform: translateX(-3rem);
            }
            to {
              opacity: 1;
              transform: translateX(0);
            }
          } 

          /* <button class="text-[#000000] text-semibold text-5xl mr-3">+</button> */
          </style>
          <section class=" justify-center items-start">
            <button onclick="document.getElementById('myModal').showModal()" id="btn" class="text-[#000000] text-5xl mr-3 text-semibold">+</button>
          </section>
          
          <dialog id="myModal" class="h-[35em] w-11/12 md:w-1/2 p-5  bg-white rounded-md ">
            <div onclick="document.getElementById('myModal').close();" class="flex w-1/12 h-auto float-right justify-center cursor-pointer">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
         </div>    
             <div class="flex flex-col w-full h-auto">
                  <div class="flex w-full h-[auto] justify-center items-center">
                    <div class="font-Mochiy flex w-10/12 h-auto py-3 justify-center items-center text-8xl font-bold pt-20">
                          MOO!
                    </div>
                  </div>
                  <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                     <div class="relative flex justify-center">
                         <input autocomplete="off" id="accesskey" name="accesskey" type="text" class="peer placeholder-transparent h-10 w-[20em] border-b-2 border-black text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Access Key" />
                         <label for="email" class="absolute left-[11.5em] -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-[#000000] peer-placeholder-shown:top-3.5 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Enter New Code</label>
                     </div>
                         <div class="relative flex justify-center">
                             <input autocomplete="off" id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-[20em] border-b-2 border-black text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
                             <label for="password" class="absolute left-[11.5em] -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-[#000000] peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Site Password</label>
                         </div>
                         <div class="relative flex justify-center">
                             <a href="status.html"><button class="w-[20em] bg-[#000000] text-white rounded-md px-2 py-1 mt-7">Add</button></a>
                         </div>
                     </div>
          </dialog>
         </div>
    </section>

<section
   class="
   bg-white
   p-10
   relative
   z-20
   overflow-hidden
   font-Poppins
   pb-1
   pt-1
   "
   >
      <div class="flex flex-wrap justify-center -mx-4">
         <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div class=
               "
               bg-white
               rounded-xl
               relative
               z-10
               overflow-hidden
               border border-[#000000]
               shadow-pricing
               py-10
               px-8
               sm:p-12
               lg:py-10 lg:px-6
               xl:p-12
               mb-10
               "
               >
               <span class="text-4xl font-bold block"><?= $cowname ?></span>
               <p class=
                  "
                  text-base text-body-color
                  mb-3
                  "
                  >
                  <?= $date ?>
               </p>
               <h2 class="font-bold text-gray-500 mb-5 text-[20px] border-b pb-5 border-black">Condition: <span id="status" class="text-green-600 font-bold"><?= $status ?></span></h2>
               <div class="mb-7">
                  <div class="text-base leading-loose mb-1 w-full"> 
                     <div style="display:flex; justify-content:space-between;width:74%;">  
                        <span>Temperature: </span> 
                        <span class = "font-semibold"><?= $temperature ?>°</span>
                     </div>
                  </div>
                  <div class="text-base leading-loose mb-1 w-full">
                     <div style="display:flex; justify-content:space-between;width:82.5%">
                        <span>Heart Rate:</span>
                        <span class = "font-semibold"><?= $heartrate ?> bpm</span>
                     </div>
                  </div>
                  <div class="text-base leading-loose mb-1 w-full">
                     <div style="display:flex; justify-content:space-between;width:82.5%">
                        <span>Respiration Rate:</span>
                        <span class = "font-semibold"><?= $respiration ?> bpm</span>
                     </div>
                  </div>
                  <div class="text-base leading-loose mb-1 w-full">
                     <div style="display:flex; justify-content:space-between;width:90%">
                        <span>Steps Count:</span>
                        <span class = "font-semibold"><?= $stepCount ?> steps</span>
                     </div>
                  </div>
                  <div class="text-base leading-loose mb-1 w-full">
                     <div style="display:flex; justify-content:space-between;width:79%">
                        <span>Location:</span>
                        <span class = "font-semibold"><?= $location ?></span>
                     </div>
                  </div>
               </div>
               <a href="status.html"
                  class="
                  w-full
                  block
                  text-base
                  font-semibold
                  text-white
                  border border-black
                  rounded-md
                  text-center
                  mb-2
                  p-4
                  bg-[#000000]
                  transition  
                  "
                  >
               Check Status
               </a></a>
               <div>
               </div>
               <a
                  href="status.html"
                  class="
                  w-full
                  block
                  text-base
                  font-semibold
                  text-white
                  border border-red-700
                  rounded-md
                  text-center
                  p-4
                  mb-1
                  bg-red-700
                  transition
                  "
                  >
               Deceased
               </a>
               <div>
                  <span class="absolute right-0 top-7 z-[-1]">
                     <svg
                        width="77"
                        height="172"
                        viewBox="0 0 77 172"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                        <defs>
                           <linearGradient
                              id="paint0_linear"
                              x1="86"
                              y1="0"
                              x2="86"
                              y2="172"
                              gradientUnits="userSpaceOnUse"
                              >
                              <stop stop-color="#3056D3" stop-opacity="0.09" />
                              <stop
                                 offset="1"
                                 stop-color="#C4C4C4"
                                 stop-opacity="0"
                                 />
                           </linearGradient>
                        </defs>
                     </svg>
                  </span>
                  <span class="absolute right-4 top-4 z-[-1]"> </span>
               </div>
            </div>
         </div>

         <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div class=
               "
               bg-white
               rounded-xl
               relative
               z-10
               overflow-hidden
               border border-[#000000]
               shadow-pricing
               py-10
               px-8
               sm:p-12
               lg:py-10 lg:px-6
               xl:p-12
               mb-10
               "
               >
               <span class="text-4xl font-bold block">COW1002</span>
               <p class=
                  "
                  text-base text-body-color
                  mb-2
                  "
                  >
                  Monday 24th, March, 2023
               </p>
               <h2 class="font-bold text-gray-500 mb-5 text-[20px] border-b pb-5 border-black">Condition: <span class="text-red-600 font-bold">NOT NORMAL</span></h2>
               <div class="mb-7">
                  <p class="text-base leading-loose mb-1">
                     Temperature:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Heart Rate:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Respiration Rate:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Steps Count:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Location:
                  </p>
               </div>
               <a
                  href="status.html"
                  class="
                  w-full
                  block
                  text-base
                  font-semibold
                  text-white
                  border border-black
                  rounded-md
                  text-center
                  mb-2
                  p-4
                  bg-[#000000]
                  transition
                  "
                  >
               Check Status
               </a>
               <div>
               </div>
               <a
                  href="javascript:void(0)"
                  class="
                  w-full
                  block
                  text-base
                  font-semibold
                  text-white
                  border border-red-700
                  rounded-md
                  text-center
                  p-4
                  mb-1
                  bg-red-700
                  transition
                  "
                  >
               Deceased
               </a>
               <div>
                  <span class="absolute right-0 top-7 z-[-1]">
                     <svg
                        width="77"
                        height="172"
                        viewBox="0 0 77 172"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                        <defs>
                           <linearGradient
                              id="paint0_linear"
                              x1="86"
                              y1="0"
                              x2="86"
                              y2="172"
                              gradientUnits="userSpaceOnUse"
                              >
                              <stop stop-color="#3056D3" stop-opacity="0.09" />
                              <stop
                                 offset="1"
                                 stop-color="#C4C4C4"
                                 stop-opacity="0"
                                 />
                           </linearGradient>
                        </defs>
                     </svg>
                  </span>
                  <span class="absolute right-4 top-4 z-[-1]"> </span>
               </div>
            </div>
         </div>

         <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div class=
               "
               bg-white
               rounded-xl
               relative
               z-10
               overflow-hidden
               border border-[#000000]
               shadow-pricing
               py-10
               px-8
               sm:p-12
               lg:py-10 lg:px-6
               xl:p-12
               mb-10
               "
               >
               <span class="text-4xl font-bold block">COW1003</span>
               <p class=
                  "
                  text-base text-body-color
                  mb-2
                  "
                  >
                  Monday 24th, March, 2023
               </p>
               <h2 class="font-bold text-gray-500 mb-5 text-[20px] border-b pb-5 border-black">Condition: <span class="text-green-600 font-bold">NORMAL</span></h2>
               <div class="mb-7">
                  <p class="text-base leading-loose mb-1">
                     Temperature:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Heart Rate:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Respiration Rate:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Steps Count:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Location:
                  </p>
               </div>
               <a
                  href="javascript:void(0)"
                  class="
                  w-full
                  block
                  text-base
                  font-semibold
                  text-white
                  border border-black
                  rounded-md
                  text-center
                  mb-2
                  p-4
                  bg-[#000000]
                  transition
                  "
                  >
               Check Status
               </a>
               <div>
               </div>
               <a
                  href="javascript:void(0)"
                  class="
                  w-full
                  block
                  text-base
                  font-semibold
                  text-white
                  border border-red-700
                  rounded-md
                  text-center
                  p-4
                  mb-1
                  bg-red-700
                  transition
                  "
                  >
               Deceased
               </a>
               <div>
                  <span class="absolute right-0 top-7 z-[-1]">
                     <svg
                        width="77"
                        height="172"
                        viewBox="0 0 77 172"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                        <defs>
                           <linearGradient
                              id="paint0_linear"
                              x1="86"
                              y1="0"
                              x2="86"
                              y2="172"
                              gradientUnits="userSpaceOnUse"
                              >
                              <stop stop-color="#3056D3" stop-opacity="0.09" />
                              <stop
                                 offset="1"
                                 stop-color="#C4C4C4"
                                 stop-opacity="0"
                                 />
                           </linearGradient>
                        </defs>
                     </svg>
                  </span>
                  <span class="absolute right-4 top-4 z-[-1]"></span>
               </div>
            </div>
         </div>
        </section>

        <section
   class="
   bg-white
   p-10
   relative
   z-20
   overflow-hidden
   font-Poppins
   pb-1
   pt-1
   "
   >
      <div class="flex flex-wrap justify-center -mx-4">
         <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div class=
               "
               bg-white
               rounded-xl
               relative
               z-10
               overflow-hidden
               border border-[#000000]
               shadow-pricing
               py-10
               px-8
               sm:p-12
               lg:py-10 lg:px-6
               xl:p-12
               mb-10
               "
               >
               <span class="text-4xl font-bold block">COW1004</span>
               <p class=
                  "
                  text-base text-body-color
                  mb-2
                  "
                  >
                  Monday 24th, March, 2023
               </p>
               <h2 class="font-bold text-gray-500 mb-5 text-[20px] border-b pb-5 border-black">Condition: <span class="text-red-600 font-bold">NOT NORMAL</span></h2>
               <div class="mb-7">
                  <p class="text-base leading-loose mb-1">
                     Temperature:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Heart Rate:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Respiration Rate:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Steps Count:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Location:
                  </p>
               </div>
               <a
                  href="javascript:void(0)"
                  class="
                  w-full
                  block
                  text-base
                  font-semibold
                  text-white
                  border border-black
                  rounded-md
                  text-center
                  mb-2
                  p-4
                  bg-[#000000]
                  transition
                  "
                  >
               Check Status
               </a>
               <div>
               </div>
               <a
                  href="javascript:void(0)"
                  class="
                  w-full
                  block
                  text-base
                  font-semibold
                  text-white
                  border border-red-700
                  rounded-md
                  text-center
                  p-4
                  mb-1
                  bg-red-700
                  transition
                  "
                  >
               Deceased
               </a>
               <div>
                  <span class="absolute right-0 top-7 z-[-1]">
                     <svg
                        width="77"
                        height="172"
                        viewBox="0 0 77 172"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                        <defs>
                           <linearGradient
                              id="paint0_linear"
                              x1="86"
                              y1="0"
                              x2="86"
                              y2="172"
                              gradientUnits="userSpaceOnUse"
                              >
                              <stop stop-color="#3056D3" stop-opacity="0.09" />
                              <stop
                                 offset="1"
                                 stop-color="#C4C4C4"
                                 stop-opacity="0"
                                 />
                           </linearGradient>
                        </defs>
                     </svg>
                  </span>
                  <span class="absolute right-4 top-4 z-[-1]"> </span>
               </div>
            </div>
         </div>

         <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div class=
               "
               bg-white
               rounded-xl
               relative
               z-10
               overflow-hidden
               border border-[#000000]
               shadow-pricing
               py-10
               px-8
               sm:p-12
               lg:py-10 lg:px-6
               xl:p-12
               mb-10
               "
               >
               <span class="text-4xl font-bold block">COW1005</span>
               <p class=
                  "
                  text-base text-body-color
                  mb-2
                  "
                  >
                  Monday 24th, March, 2023
               </p>
               <h2 class="font-bold text-gray-500 mb-5 text-[20px] border-b pb-5 border-black">Condition: <span class="text-red-600 font-bold">NOT NORMAL</span></h2>
               <div class="mb-7">
                  <p class="text-base leading-loose mb-1">
                     Temperature:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Heart Rate:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Respiration Rate:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Steps Count:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Location:
                  </p>
               </div>
               <a
                  href="javascript:void(0)"
                  class="
                  w-full
                  block
                  text-base
                  font-semibold
                  text-white
                  border border-black
                  rounded-md
                  text-center
                  mb-2
                  p-4
                  bg-[#000000]
                  transition
                  "
                  >
               Check Status
               </a>
               <div>
               </div>
               <a
                  href="javascript:void(0)"
                  class="
                  w-full
                  block
                  text-base
                  font-semibold
                  text-white
                  border border-red-700
                  rounded-md
                  text-center
                  p-4
                  mb-1
                  bg-red-700
                  transition
                  "
                  >
               Deceased
               </a>
               <div>
                  <span class="absolute right-0 top-7 z-[-1]">
                     <svg
                        width="77"
                        height="172"
                        viewBox="0 0 77 172"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                        <defs>
                           <linearGradient
                              id="paint0_linear"
                              x1="86"
                              y1="0"
                              x2="86"
                              y2="172"
                              gradientUnits="userSpaceOnUse"
                              >
                              <stop stop-color="#3056D3" stop-opacity="0.09" />
                              <stop
                                 offset="1"
                                 stop-color="#C4C4C4"
                                 stop-opacity="0"
                                 />
                           </linearGradient>
                        </defs>
                     </svg>
                  </span>
                  <span class="absolute right-4 top-4 z-[-1]"> </span>
               </div>
            </div>
         </div>

         <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div class=
               "
               bg-white
               rounded-xl
               relative
               z-10
               overflow-hidden
               border border-[#000000]
               shadow-pricing
               py-10
               px-8
               sm:p-12
               lg:py-10 lg:px-6
               xl:p-12
               mb-10
               "
               >
               <span class="text-4xl font-bold block">COW1006</span>
               <p class=
                  "
                  text-base text-body-color
                  mb-2
                  "
                  >
                  Monday 24th, March, 2023
               </p>
               <h2 class="font-bold text-gray-500 mb-5 text-[20px] border-b pb-5 border-black">Condition: <span class="text-green-600 font-bold">NORMAL</span></h2>
               <div class="mb-7">
                  <p class="text-base leading-loose mb-1">
                     Temperature:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Heart Rate:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Respiration Rate:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Steps Count:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Location:
                  </p>
               </div>
               <a
                  href="javascript:void(0)"
                  class="
                  w-full
                  block
                  text-base
                  font-semibold
                  text-white
                  border border-black
                  rounded-md
                  text-center
                  mb-2
                  p-4
                  bg-[#000000]
                  transition
                  "
                  >
               Check Status
               </a>
               <div>
               </div>
               <a
                  href="javascript:void(0)"
                  class="
                  w-full
                  block
                  text-base
                  font-semibold
                  text-white
                  border border-red-700
                  rounded-md
                  text-center
                  p-4
                  mb-1
                  bg-red-700
                  transition
                  "
                  >
               Deceased
               </a>
               <div>
                  <span class="absolute right-0 top-7 z-[-1]">
                     <svg
                        width="77"
                        height="172"
                        viewBox="0 0 77 172"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                        <defs>
                           <linearGradient
                              id="paint0_linear"
                              x1="86"
                              y1="0"
                              x2="86"
                              y2="172"
                              gradientUnits="userSpaceOnUse"
                              >
                              <stop stop-color="#3056D3" stop-opacity="0.09" />
                              <stop
                                 offset="1"
                                 stop-color="#C4C4C4"
                                 stop-opacity="0"
                                 />
                           </linearGradient>
                        </defs>
                     </svg>
                  </span>
                  <span class="absolute right-4 top-4 z-[-1]"></span>
               </div>
            </div>
         </div>
        </section>

        <section
         class="
         bg-white
         p-10
         relative
         z-20
         overflow-hidden
         font-Poppins
         pb-1
         pt-1
         "
   >
      <div class="flex flex-wrap justify-center -mx-4">
         <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div class=
               "
               bg-white
               rounded-xl
               relative
               z-10
               overflow-hidden
               border border-[#000000]
               shadow-pricing
               py-10
               px-8
               sm:p-12
               lg:py-10 lg:px-6
               xl:p-12
               mb-10
               "
               >
               <span class="text-4xl font-bold block">COW1007</span>
               <p class=
                  "
                  text-base text-body-color
                  mb-2
                  "
                  >
                  Monday 24th, March, 2023
               </p>
               <h2 class="font-bold text-gray-500 mb-5 text-[20px] border-b pb-5 border-black">Condition: <span class="text-green-600 font-bold">NORMAL</span></h2>
               <div class="mb-7">
                  <p class="text-base leading-loose mb-1">
                     Temperature:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Heart Rate:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Respiration Rate:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Steps Count:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Location:
                  </p>
               </div>
               <a
                  href="javascript:void(0)"
                  class="
                  w-full
                  block
                  text-base
                  font-semibold
                  text-white
                  border border-black
                  rounded-md
                  text-center
                  mb-2
                  p-4
                  bg-[#000000]
                  transition
                  "
                  >
               Check Status
               </a>
               <div>
               </div>
               <a
                  href="javascript:void(0)"
                  class="
                  w-full
                  block
                  text-base
                  font-semibold
                  text-white
                  border border-red-700
                  rounded-md
                  text-center
                  p-4
                  mb-1
                  bg-red-700
                  transition
                  "
                  >
               Deceased
               </a>
               <div>
                  <span class="absolute right-0 top-7 z-[-1]">
                     <svg
                        width="77"
                        height="172"
                        viewBox="0 0 77 172"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                        <defs>
                           <linearGradient
                              id="paint0_linear"
                              x1="86"
                              y1="0"
                              x2="86"
                              y2="172"
                              gradientUnits="userSpaceOnUse"
                              >
                              <stop stop-color="#3056D3" stop-opacity="0.09" />
                              <stop
                                 offset="1"
                                 stop-color="#C4C4C4"
                                 stop-opacity="0"
                                 />
                           </linearGradient>
                        </defs>
                     </svg>
                  </span>
                  <span class="absolute right-4 top-4 z-[-1]"> </span>
               </div>
            </div>
         </div>

         <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div class=
               "
               bg-white
               rounded-xl
               relative
               z-10
               overflow-hidden
               border border-[#000000]
               shadow-pricing
               py-10
               px-8
               sm:p-12
               lg:py-10 lg:px-6
               xl:p-12
               mb-10
               "
               >
               <span class="text-4xl font-bold block">COW1008</span>
               <p class=
                  "
                  text-base text-body-color
                  mb-2
                  "
                  >
                  Monday 24th, March, 2023
               </p>

               <h2 class="font-bold text-gray-500 mb-5 text-[20px] border-b pb-5 border-black">Condition: <span class="text-green-600 font-bold">NORMAL</span></h2>
               <div class="mb-7">
                  <p class="text-base leading-loose mb-1">
                     Temperature:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Heart Rate:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Respiration Rate:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Steps Count:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Location:
                  </p>
               </div>
               <a
                  href="javascript:void(0)"
                  class="
                  w-full
                  block
                  text-base
                  font-semibold
                  text-white
                  border border-black
                  rounded-md
                  text-center
                  mb-2
                  p-4
                  bg-[#000000]
                  transition
                  "
                  >
               Check Status
               </a>
               <div>
               </div>
               <a
                  href="javascript:void(0)"
                  class="
                  w-full
                  block
                  text-base
                  font-semibold
                  text-white
                  border border-red-700
                  rounded-md
                  text-center
                  p-4
                  mb-1
                  bg-red-700
                  transition
                  "
                  >
               Deceased
               </a>
               <div>
                  <span class="absolute right-0 top-7 z-[-1]">
                     <svg
                        width="77"
                        height="172"
                        viewBox="0 0 77 172"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                        <defs>
                           <linearGradient
                              id="paint0_linear"
                              x1="86"
                              y1="0"
                              x2="86"
                              y2="172"
                              gradientUnits="userSpaceOnUse"
                              >
                              <stop stop-color="#3056D3" stop-opacity="0.09" />
                              <stop
                                 offset="1"
                                 stop-color="#C4C4C4"
                                 stop-opacity="0"
                                 />
                           </linearGradient>
                        </defs>
                     </svg>
                  </span>
                  <span class="absolute right-4 top-4 z-[-1]"> </span>
               </div>
            </div>
         </div>

         <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div class=
               "
               bg-white
               rounded-xl
               relative
               z-10
               overflow-hidden
               border border-[#000000]
               shadow-pricing
               py-10
               px-8
               sm:p-12
               lg:py-10 lg:px-6
               xl:p-12
               mb-10
               "
               >
               <span class="text-4xl font-bold block">COW1009</span>
               <p class=
                  "
                  text-base text-body-color
                  mb-2
                  "
                  >
                  Monday 24th, March, 2023
               </p>
               <h2 class="font-bold text-gray-500 mb-5 text-[20px] border-b pb-5 border-black">Condition: <span class="text-red-600 font-bold">NOT NORMAL</span></h2>
               <div class="mb-7">
                  <p class="text-base leading-loose mb-1">
                     Temperature:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Heart Rate:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Respiration Rate:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Steps Count:
                  </p>
                  <p class="text-base leading-loose mb-1">
                     Location:
                  </p>
               </div>
               <a
                  href="javascript:void(0)"
                  class="
                  w-full
                  block
                  text-base
                  font-semibold
                  text-white
                  border border-black
                  rounded-md
                  text-center
                  mb-2
                  p-4
                  bg-[#000000]
                  transition
                  "
                  >
               Check Status
               </a>
               <div>
               </div>
               <a
                  href="javascript:void(0)"
                  class="
                  w-full
                  block
                  text-base
                  font-semibold
                  text-white
                  border border-red-700
                  rounded-md
                  text-center
                  p-4
                  mb-1
                  bg-red-700
                  transition
                  "
                  >
               Deceased
               </a>
               <div>
                  <span class="absolute right-0 top-7 z-[-1]">
                     <svg
                        width="77"
                        height="172"
                        viewBox="0 0 77 172"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                        <defs>
                           <linearGradient
                              id="paint0_linear"
                              x1="86"
                              y1="0"
                              x2="86"
                              y2="172"
                              gradientUnits="userSpaceOnUse"
                              >
                              <stop stop-color="#3056D3" stop-opacity="0.09" />
                              <stop
                                 offset="1"
                                 stop-color="#C4C4C4"
                                 stop-opacity="0"
                                 />
                           </linearGradient>
                        </defs>
                     </svg>
                  </span>
                  <span class="absolute right-4 top-4 z-[-1]"></span>
               </div>
            </div>
         </div>
        </section>

        <footer class="bg-[#000] mt-10">
            <div class="max-w-lg bg-[#000] px-4 pt-24 py-8 mx-auto text-left md:max-w-none md:text-center">
                 <h1 class="text-3xl font-extrabold leading-10 tracking-tight text-white text-center sm:leading-none md:text-6xl lg:text-7xl"><span class="inline md:block text-8xl font-Mochiy">MOO!</span></h1>
                 <h2 class="font-Poppins text-white mt-3">Copyright. All rights reserved.</h2>
                 <h2 class="font-Poppins text-white">Powered by Team ni Paula Angelica Penaflorida</h2>
                 <div class="mx-auto rounded-lg font-black mt-5 text-zinc-400 md:mt-12 md:max-w-lg text-center lg:text-lg"></div>
            </div>
         </footer>

</body>
</html>