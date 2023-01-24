<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./View/style.css"><script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                clifford: '#da373d',
              }
            }
          }
        }
      </script>
      <style type="text/tailwindcss">
        @layer utilities {
          .content-auto {
            content-visibility: auto;
          }
        }
      </style>
    <title>Document</title>
</head>
<body class="bg-fuchsia-20"> 
    <header class=" w-full bg-fuchsia-20">
<nav class="flex fixed top-0 justify-between p-2 z-30 w-full bg-gray-700 px-4 transition easy-linear">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="bar w-8 h-8 text-white my-auto md:hidden cursor-pointer">
           <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
</svg>
            <p class="text-white font-bold text- my-auto">Make<span class="text-sm text-fuchsia-600">upGLOW</span></p>
            <ul class="navUl flex justify-between text-lg font-bold text-white max-md:flex-col max-md:absolute max-md:w-full max-md:left-0 max-md:bg-black max-md:hidden relative">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="navx w-8 h-8 text-white my-auto md:hidden cursor-pointer absolute">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
</svg>
    
            <li class="border-b-white mx-4 border-b hover:text-fuchsia-200 hover:border-b-2 w-fit max-md:mx-auto max-md:my-2"><a href="?p=home">Home</a></li>
                <li class="border-b-white mx-4 border-b hover:text-fuchsia-200 hover:border-b-2 w-fit max-md:mx-auto max-md:my-2"><a href="?p=catalogue">Catalogue</a></li>
                <?php if(isset($_SESSION['user'])) { ?>
                <li class="border-b-white mx-4 border-b hover:text-fuchsia-200 hover:border-b-2 w-fit max-md:mx-auto max-md:my-2"><a href="?p=dashboard">Dashboard</a></li>
                <?php } ?>
            </ul>
            <?php if(!isset($_SESSION['user'])) { ?>
            <a href="?p=login&a=t" class="border border-white flex px-4 py-1 text-lg rounded-md font-medium text-white hover:text-black hover:bg-white transition easy-linear"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 my-auto">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
              </svg>
              <span class="max-sm:hidden">Login</span>
               </a>
            <?php } else { ?>
                <a href="?p=home&a=out" class="border border-white flex px-4 py-1 text-lg rounded-md font-medium text-white hover:text-black hover:bg-white transition easy-linear"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 my-auto">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
              </svg>
              <span class="max-sm:hidden">Logout</span>
               </a>
               <?php } ?>
</nav>
<script>
    var bar = document.querySelector('.bar');
    var x=document.querySelector('.navx');
    var nav = document.querySelector('.navUl');
    bar.addEventListener('click',e=>{
        nav.classList.remove('max-md:hidden');
    })
    x.addEventListener('click',e=>{
        nav.classList.add('max-md:hidden');
    });
</script>