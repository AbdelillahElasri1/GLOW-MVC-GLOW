
<div class="h-screen">
        <?php require_once './public/includes/nav.php' ?>
      <!-- carsoul start -->


    <div id="animation-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56  rounded-lg md:h-96">
             <!-- Item 1 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="./View/img/bg.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                <img src="" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-200 ease-linear bg-blue-600" data-carousel-item>
                <img src="" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    

    <!-- carsoul end -->

    <!-- slide start -->
    <div class="">
      <div class="flex gap-6">
      <img class="ml-8 mb-8 rounded-[70px] h-[250px]" src="./View/img/bg.jpg" alt="">
      <img class="ml-2 mb-8 rounded-[70px] h-[250px]" src="./View/img/bg.jpg" alt="">
      <img class="ml-2 mb-8 rounded-[70px] h-[250px]" src="./View/img/bg.jpg" alt="">
      </div>
      
      
      <!-- <div>
      <h1>About</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat magnam dicta minus nostrum consequatur quisquam 
        sequi laborum quod! Quidem pariatur laudantium recusandae unde id, enim eum expedita, eligendi excepturi obcaecati vero, 
        in ea aspernatur? Modi quod sint soluta eligendi autem dolorum error cumque maxime amet delectus asperiores, aliquam odio saepe.</p>
    </div> -->
    </div>
    <!-- slide end -->

    <!-- product start -->
    <div class="bg-white p-6">
        <h1 class="text-2xl font-medium mb-4">Products</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
          <div class="bg-white rounded-lg shadow-lg flex ">
              <div class="px-6 py-4 ">
                <img class="w-full w-[550px] h-[250px]" src="./View/img/bg.jpg" alt="Product 1">
              <!-- <h2 class="text-xl font-medium mb-2 px-10 ">Product 1</h2>
              <p class="text-gray-700 mb-4 px-12  " >$20.00</p>
              <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 px-12  ">Add to Cart</button> -->
            </div>
            <div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis voluptatibus, Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, atque?</p>
                <button class="bg-blue-600 w-40 h-12 rounded-full mt-[100px] ml-[100px]">Learn more</button>
            </div>
          </div>
          <!-- Repeat the above div for additional products -->
          <div class="bg-white rounded-lg shadow-lg flex">
              <div class="px-6 py-4">
                <img class="w-full w-[550px] h-[250px]" src="./View/img/bg.jpg" alt="Product 1">
              <!-- <h2 class="text-xl font-medium mb-2 px-10">Product 1</h2>
              <p class="text-gray-700 mb-4 px-12">$20.00</p>
              <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 px-12">Add to Cart</button> -->
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In voluptates impedit molestiae Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, ut. </p>
                <button class="bg-blue-600 w-40 h-12 rounded-full mt-[100px] ml-[100px]">Learn more</button>
          </div>
        </div>
      </div>
      
    <!-- product end -->
    <!-- vedio start -->
      <h1 class="ml-[520px] mt-[60px] font-bold">this video for tutorial</h1>
    <video class="w-full h-[450px] mt-[50px]" autoplay controls>
    <source src="./View/img/타마누 오일이 주는 강력한 회복에너지🌿[시오리스 _ 유 룩 쏘 영 나이트 크림].mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  
    <!-- vedio end -->

    <!-- card start -->
  <div class="flex gap-8">
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mt-[100px]">
      <a href="#">
          <img class="rounded-t-lg " src="./View/img/bg.jpg" alt="" />
      </a>
      <div class="p-5">
          <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
          <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Read more
              <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
      </div>
    </div>
    <!-- another card  -->
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mt-[100px]">
      <a href="#">
          <img class="rounded-t-lg " src="./View/img/bg.jpg" alt="" />
      </a>
      <div class="p-5">
          <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
          <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Read more
              <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
      </div>
    </div>
    <!-- another card -->
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mt-[100px]">
      <a href="#">
          <img class="rounded-t-lg " src="./View/img/bg.jpg" alt="" />
      </a>
      <div class="p-5">
          <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
          <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Read more
              <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </a>
      </div>
    </div>
  </div>

    <!-- card end -->
    <footer class="p-4 bg-black shadow mt-14 md:px-6 md:py-8 ">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="" class="flex items-center mb-4 sm:mb-0">
                <img src="./View/img/bg.jpg" class="mr-3 h-8" alt="" />
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm text-white sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-fuchsia-200 sm:mx-auto dark:border-whtext-white lg:my-8" />
        <span class="block text-sm text-white sm:text-center ">© 2023 <a href="#" class="hover:underline">GROWGURU™</a>. All Rights Reserved.
        </span>
    </footer>
</body>
</html>