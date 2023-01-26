<div class="h-screen">
    <?php require_once './public/includes/nav.php' ?>
          <div class="relative pt-12 h-80 w-full">
            <div class="mx-auto text-4xl font-bold  h-full w-full text-white z-10 absolute">
                <h1 class="text-center mt-36">Product</h1>
            </div>
            <img class="absolute h-screen w-full brightness-50" src="https://cdn.pixabay.com/photo/2018/01/14/00/05/makeup-3081015_1280.jpg" alt="">
            
        </div>
        <!-- search start -->
        <div class=" flex h-full w-full text-black z-10 absolute">
            <div class="absolute justify-center flex w-full">
                <input id="search" class="border-2 w-2/4 border-white p-2 h-12 opacity-50 " placeholder="Search" type="text" data-search>
            <!-- <input id="done" class="border border-white text-white p-2 font-bold " type="button" value="Search"> -->
            <!-- <button  class="border border-white text-white p-2 font-bold " type = "submit">search</button> -->
            </div>
            <!-- <div class="min-h-screen bg-gray-100 flex flex-col justify-center pb-[400px]">
                <div class="relative p-12 w-full sm:max-w-2xl sm:mx-auto">
                    <div class="overflow-hidden z-0 rounded-full relative p-3">
                        <form role="form" class="relative flex z-50 bg-white rounded-full">
                            <input id = "search" type="text" placeholder="enter your search here" class="rounded-full flex-1 px-6 py-4 text-gray-700 focus:outline-none">
                            <button id = "done" value = "search" class="bg-indigo-500 text-white rounded-full font-semibold px-8 py-4 hover:bg-indigo-400 focus:bg-indigo-600 focus:outline-none">Search</button>
                        </form>
                        </div>
                        </div>
                        </div> -->

                        
      
            <!-- search end -->
        </div>
</div>


        </header>
        <main class="m-4 my-28">
            <h2 class="text-4xl text-center text-black font-medium">Products</h2>
            <div class="products my-10">
            <?php
                    $post = $control->getProducts();
            foreach ($post as $key => $value) { {
                    ?>
                <!-- another product -->
                <!-- <div id="searchresult">
                </div> -->
        <div class=" Names w-full max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="./View/img/<?= $value['productPic']?>" alt="product image" />
            </a>
            <div class="px-5 pb-5 ">
                <a href="#">
                    <h5 class="PNames text-xl font-semibold tracking-tight text-gray-900 dark:text-white"><?=$value['productName']?></h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-3xl font-bold text-gray-900 dark:text-white">$<?=$value['productPrice']?></span>
                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                </div>
            </div>
        </div>
             <?php }
            }?> 
            </div>
        </main>
        <?php require_once './public/includes/footer.php' ?>

        <!-- <script src="./View/script.js?<?php //time() ?>"></script> -->
        <script type="text/javascript">
            const search = document.getElementById("search");
            const searchInput = document.querySelector("[data-search]");
            const Names = document.querySelectorAll(".Names");
            //var for second function
            const items = document.querySelectorAll(".PNames");




            //second method of search
            searchInput.addEventListener("input", (e) => {
                let itemshidden = 0;
                const value = e.target.value;

                for (let i = 0; i < Names.length; i++) {  
                    //for showing all items 
                    if (value.length == items[i].innerText.toLowerCase().includes(value.toLowerCase())) {
                        Names[i].style.display = "block";
                    }
                    //for showing searched items
                    if (items[i].innerText.toLowerCase().includes(value.toLowerCase())) {
                        Names[i].style.display = 'block';

                    } else {
                        //for hiding items
                        Names[i].style.display = "none";
                        //for counting hidden items
                        itemshidden++;
                    }
                }
                    //for no items
                    if (itemshidden==(items.length)){
                        document.getElementById("noitem").style.display ='block';
                        //for resetting hidden items
                        itemshidden==0;
                    }else{document.getElementById("noitem").style.display ='none';}
            })

        </script>
</body>
</html>