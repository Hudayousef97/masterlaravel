<div class="min-h-screen flex flex-col sm:justify-center items-center  " style="
 position: relative;
width: 100%;
background-image: url(../img/bodycare-skincare-beauty-dark.jpg);
background-repeat: no-repeat;
background-size: cover;
min-height: 100vh;
overflow: hidden;">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-2xl mt-6 px-6 py-4  shadow-md overflow-hidden sm:rounded-lg" style=" background: linear-gradient(rgba(216, 170, 218, 0.7), rgba(53, 53, 53, .7));border:1px solid white;font-size:20px">
        {{ $slot }}
    </div>
</div>
