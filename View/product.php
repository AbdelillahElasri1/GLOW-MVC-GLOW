<table class="w-full whitespace-nowrap ">
                <thead>
                    <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 ">
                        <th class="font-normal text-left pl-4">Product</th>
                        <th class="font-normal text-left pl-12">Product Name</th>
                        <th class="font-normal text-left pl-12">Product Price</th>
                        <th class="font-normal text-left pl-20"></th>
                    </tr>
                </thead>
                <tbody class="w-full">
                    
                    <?php
                    $post = $control->getProducts();
                    foreach($post as $key => $value){
                        {
                    ?>
                            <tr class="focus:outline-none h-20 text-sm leading-none text-gray-800  bg-white   hover:bg-gray-100 ay-900  border-b border-t border-gray-100 -700 ">
                                <td class="pl-4 cursor-pointer">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10">
                                        <img class="w-full h-full" src="./View/img/<?= $value['productPic']?>" />
                                        </div>
                                    </div>
                                </td>
                                <td class="pl-12">
                                    <p class=" font-medium"><?= $value['productName'] ?></p>
                                </td>
                                <td class="pl-12">
                                    <p class="font-medium"> <span class="finalPrice"><?= $value['productPrice'] ?></span> DH</p>
                                </td>
                                <td class="pl-20">
                                    <a href="?p=dashboard&pd=update&id=<?php echo  $value['id']?>" class="text-indigo-600 hover:bg-indigo-200 p-2 rounded-lg font-medium transition easy-linear">Update</a>
                                    <a href="?p=dashboard&a=delete&id=<?php echo $value['id']?>" class="text-red-600 hover:bg-red-200 p-2 rounded-lg font-medium transition easy-linear">Delete</a>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>