<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @vite('resources/css/app.css')
</head>

<body class="flex font-sans antialia leading-normal tracking-wider bg-cover bg-no-repeat" style="background-image:url('back.jpg');">
    <div class="flex-auto w-full">
        <nav class="
          relative
          w-full
          flex flex-wrap
          items-center
          justify-between
          p-5
         text-gray-500
          hover:text-gray-700
          focus:text-gray-700
          navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
                <button class="
            navbar-toggler
            text-gray-500
            border-0
            hover:shadow-none hover:no-underline
            py-2
            px-2.5
            bg-transparent
            focus:outline-none focus:ring-0 focus:shadow-none focus:no-underline" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                        </path>
                    </svg>
                </button>
                <div class="collapse navbar-collapse flex-grow items-center" id="navbarSupportedContent">
                    <ul class="navbar-nav flex flex-col pl-0 list-style-none ml-auto">
                        <li class="nav-item px-3 text-base">
                        <i class="fa-brands fa-instagram"></i>
                            <a class="nav-link text-gray-400 hover:bg-yellow-500 hover:text-white hover:bg-opacity-1 focus:outline-none focus:ring-0 transition duration-150 ease-in-out rounded-sm px-4 py-3 " aria-current="page" href="#">Instagram</a>
                        </li>
                        <li class="nav-item text-base">
                            <a class="nav-link text-gray-400 hover:bg-yellow-500 hover:text-white hover:bg-opacity-1 focus:outline-none focus:ring-0 transition duration-150 ease-in-out rounded-sm px-4 py-3 " aria-current="page" href="#">Jadwal Peminjaman</a>
                        </li>
                    </ul>
                </div>
        </nav>
        <div class="">
            <div class="text-center mx-auto mt-52 animate__animated animate__fadeInUp">

                <!-- <div class="justify-center"><img src="logo.png" alt=""></div> -->
                <div class="font-semibold text-5xl text-white transition-transform= 150ms">Selamat Datang</div>
                <div class="font-semibold text-4xl text-white m-6 mx-auto">Peminjaman Alat Olahraga SMKN 1 Surabaya</div>
                <a href="{{ route('login.index') }}" class="justify-self-center bg-transparent border-2 border-yellow-500 rounded-md text-lg text-yellow-500 hover:bg-yellow-500 transition duration-300  hover:text-gray-100 focus:border-3 focus:border-yellow-300 font-semibold py-1 px-20 mx-auto">Masuk</a>
                <div>

                </div>

            </div>
        </div>
    </div>


</body>

</html>