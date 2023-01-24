<?php require_once './public/includes/nav.php' ?>
        </header>
        <main class="flex">
            <section class="w-1/6 bg-gray-700 h-screen">
                <h1 class="pt-20 font-bold text-fuchsia-300 text-white text-xl text-center flex justify-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
</svg>
 <span class="max-md:hidden">Dashboard</span></h1>
                <div class="my-auto h-fit">
                    <a href="?p=dashboard&pd=product" class="text-lg text-white font-medium p-2 mt-14 hover:bg-gray-400 hover:text-white   flex max-md:justify-center transition easy-linear max-md:text-sm"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 my-auto">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                      </svg>
                       <span class="max-md:hidden">Products</span> </a>
                <a href="?p=dashboard&pd=add" class="text-lg text-white font-medium p-2 hover:bg-gray-400 flex max-md:justify-center  hover:text-white  transition easy-linear max-md:text-sm"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 my-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <span class="max-md:hidden">Add Products</span> </a>
                <a href="?p=dashboard&pd=statistique" class="text-lg text-white font-medium p-2 flex max-md:justify-center hover:bg-gray-400 hover:text-white   transition easy-linear max-md:text-sm"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 my-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                  </svg>
                  <span class="max-md:hidden">statistique</span></a>
                </div>
            </section>
            <div class="w-full overflow-auto mt-24 mx-4 h-96">
               <?php 
               if(isset($_GET['pd'])){
                $pagesDashboard = ['product','update','add','statistique'];
                if(in_array($_GET['pd'],$pagesDashboard)){
                       require_once './View/' . $_GET['pd'] . '.php';
                }else require_once './View/product.php';
               }else require_once './View/product.php';
               ?>
            </div>
            
        </main>
        <?php require_once './public/includes/footer.php' ?>
</body>
</html>