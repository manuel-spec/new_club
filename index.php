<?php
$title = "Welcome to the Club ";
require("views/partials/head.php"); ?>
<?php require("views/partials/nav.php"); ?>
<div class="pt-16 pb-8 mx-auto max-w-5xl px-4 sm:pt-24">
    <div class="text-center">
        <h1 class="text-5xl tracking-tight font-extrabold sm:text-5xl pb-3 md:pb-0 md:text-6xl">
            Welcome to the new version of club member managemet system
        </h1>
        <p class="mt-3 max-w-md mx-auto text-base text-gray-600 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
            <code class="text-gray-600 font-semibold">CSEC-DEV</code>
            <span>we develop together !</span>
        </p>
        <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
            <div class="rounded-md shadow">
                <a class="w-full text-white flex items-center justify-center px-8 py-4 border border-transparent text-base font-medium rounded-md  bg-green-600 hover:bg-green-500 md:py-5  md:text-2xl md:px-10" href="views/auth/Signup.php">Get started</a>
            </div>

        </div>
    </div>
</div>
<?php require("views/partials/foot.php"); ?>