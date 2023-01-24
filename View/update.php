<?php $data=$control->getProducts()[0]  ?>
<script src="https://cdn.tailwindcss.com"></script>
<center>
    <form action="?p=dashboard&a=update&id=<?= $data['id'] ?>" class="w-1/2" method="post" enctype="multipart/form-data" class="border p-6">
        
    <label class="block">
        <span class="sr-only">Choose profile photo</span>
        <input type="file" name="productPic" class="block w-full text-sm text-sky-700
          file:mr-4 file:py-2 file:px-4
          file:rounded-full file:border-0
          file:text-sm file:font-semibold
          file:bg-gray-100 file:text-black
          hover:file:bg-gray-100
        "/>
      </label>
      <label class="block">
        <span  class="sr-only">Product Name</span>
        <input type="text" value="<?=$data['productName']?>" name="productName" required placeholder="Product Name" class="block px-2 border w-full text-sm text-sky-700 h-10 rounded-sm my-4 px-2
        "/>
      </label>
      <label class="block">
        <span class="sr-only">Product Price</span>
        <input type="number" value="<?=$data['productPrice']?>" name="productPrice" required placeholder="Product Price" class="block px-2 border w-full text-sm text-sky-700 h-10 rounded-sm my-4 px-2
        "/>
      </label>
      <input type="submit" name="update" class="w-full bg-black border border-black rounded-xl font-bold text-white hover:text-black h-8 cursor-pointer hover:bg-gray-300 transition easy-linear" value="Update">
</form>
</center>