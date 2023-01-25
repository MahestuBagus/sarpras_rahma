<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @yield('')
</head>

<body class="flex-auto font-sans leading-normal tracking-wider bg-cover bg-no-repeat" style="background-image:url('back.jpg');">
    <section class="h-screen animate__animated animate__fadeIn">
        <div class="container pl-14 py-12 h-full ">
            <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-600 ">
                <div id="carouselExampleControls" class="carousel slide relative" data-bs-ride="carousel">
                    <div class="carousel-inner relative w-full overflow-hidden">
                        <div class="carousel-item active relative float-left w-full">
                            <img src="1578283707.jpg" class="block w-full" alt="Wild Landscape" />
                        </div>
                        <div class="carousel-item relative float-left w-full">
                            <img src="1518666393.jpg" class="block w-full" alt="Camera" />
                        </div>
                        <div class="carousel-item relative float-left w-full">
                            <img src="1518666305.jpg" class="block w-full" alt="" />
                        </div>
                    </div>
                    <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="md:w- lg:w-5/12 lg:ml-10">
                    <form>
                        <!-- NISN input -->
                        <!-- <div class="mb-6">
                            <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="NISN" />
                        </div> -->
                        <div class="text-center text-white">
                            <div class="tracking-wider text-4xl mb-1 font-semibold ">
                                <span>LOGIN</span>
                            </div>
                            <div class="mb-7 text-sm font-medium">
                                <span>Silahkan Login Menggunakan Akun Anda</span>
                            </div>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="NISN" />
                            <label for="floatingInput" class="text-gray-700">NISN</label>
                        </div>

                        <!-- Tanggal Lahir input -->
                        <div class="datepicker relative form-floating mb-5">
                            <input type="date" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Tanggal Lahir" />
                            <label for="floatingInput" class="text-gray-700">Tanggal Lahir</label>
                        </div>

                        <div class="flex justify-between items-center mb-4">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" id="exampleCheck3" />
                                <label class="form-check-label inline-block text-white text-sm" for="exampleCheck2">Remember me</label>
                            </div>
                            <!-- <a href="#!" class="text-blue-600 hover:text-white focus:text-blue-700 active:text-blue-800 duration-200 transition ease-in-out">Forgot password?</a> -->
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="inline-block px-7 py-3 bg-yellow-500 text-white font-semibold text-sm leading-tight uppercase rounded shadow-md hover:bg-yellow-600 hover:shadow-lg focus:bg-yellow-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-600 active:shadow-lg transition duration-150 ease-in-out w-full" data-mdb-ripple="true" data-mdb-ripple-color="light">
                            Login
                        </button>
                        <div class="my-4 text-center text-sm">
                            <a href="" class="text-white underline hover:text-blue-500 ">Login Sebagai Admin</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

</html>