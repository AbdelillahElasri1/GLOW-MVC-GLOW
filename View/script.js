var search = document.getElementById('search');
var products = document.querySelectorAll('.prod');
var productsName = document.querySelectorAll('.productName');
var btn = document.getElementById('done');
btn.addEventListener('click',e=>{
    console.log(1)
    for(var i in products){
        console.log(search.value == productsName[i].innerHTML);
        if(search.value == productsName[i].innerHTML){
            products[i].classList.remove('hidden');
        }else if(search.value ==''){
            products[i].classList.remove('hidden');
        }else if(search.value != productsName[i].innerHTML)
              products[i].classList.add('hidden');
    }
})