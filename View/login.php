<script src="https://cdn.tailwindcss.com"></script>
<div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
      <div>
        <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Welcome Back : )</h2>

      </div>
      <form class="mt-8 space-y-6" action="?a=t&p=home" method="POST">
        <input type="hidden" name="remember" value="true">
        <div class="-space-y-px rounded-md shadow-sm">
          <div>
            <label for="email-address" class="sr-only">Email address</label>
            <input id="email-address" name="email" type="text" autocomplete="email" required class="username relative my-4 block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" placeholder="Email address">
          </div>
          <div>
            <label for="password" class="sr-only">Password</label>
            <input id="password" name="password" type="password" autocomplete="current-password" required class="psw relative my-4 block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" placeholder="Password">
          </div>
        </div>
        <div class="msgPassword hidden relative my-4 block w-full bg-red-300 text-white sm:text-sm text-center p-2 font-medium">
          <p>password Invalid : remove white space</p>
        </div>
        <div>
          <button type="submit" id="myButtonId" name="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-black py-2 px-4 text-sm font-medium border border-black text-white hover:text-black hover:bg-white focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <svg class="h-5 w-5 text-white group-hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
              </svg>
            </span>
            Log in
          </button>
        </div>
      </form>
    </div>
  </div>
  <script src="./View/regex.js?<?php time() ?>"></script>
  <!-- <script>
    var username = document.querySelector('.username');
    var message = document.querySelector('.msgPassword');
    var validUsername;
    username.onkeypress=()=>{
        var usernameRegex = /^[a-zA-Z0-9]+$/;
        var validfirstUsername = usernameRegex.test(username.value);
        if(validfirstUsername){
            message.classList.add('hidden');
            document.getElementById("myButtonId").removeAttribute("disabled");
            document.getElementById("myButtonId").classList.remove('bg-gray-400');
        }else {
            message.classList.remove('hidden');
            document.getElementById("myButtonId").classList.add('bg-gray-400');
            document.getElementById("myButtonId").setAttribute("disabled", ""); 
    }
}
  </script> -->