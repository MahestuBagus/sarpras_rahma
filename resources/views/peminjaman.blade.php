<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
</head>

<body class="flex-auto font-sans leading-normal tracking-wider bg-cover bg-no-repeat" style="background-image:url('back.jpg');">
  <div class="">
    <nav class="
          relative
          w-full
          flex flex-wrap
          items-center
          justify-between
          p-5
          bg-gray-100
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
          <ul class="navbar-nav flex flex-col pl-0 list-style-none mx-auto">
            <li class="nav-item px-3 text-base">
              <a class="nav-link text-gray-400 hover:bg-yellow-500 hover:text-white hover:bg-opacity-1 focus:outline-none focus:ring-0 transition duration-150 ease-in-out rounded-sm px-4 py-3 " aria-current="page" href="#">Peminjaman</a>
            </li>
            <li class="nav-item text-base">
              <a class="nav-link text-gray-400 hover:bg-yellow-500 hover:text-white hover:bg-opacity-1 focus:outline-none focus:ring-0 transition duration-150 ease-in-out rounded-sm px-4 py-3 " aria-current="page" href="#">Jadwal Peminjaman</a>
            </li>
          </ul>
        </div>
    <div class="flex items-center relative">
      <div class="dropdown relative">
        <div class="dropdown relative">
          <a class="dropdown-toggle flex items-center hidden-arrow" href="#" id="dropdownMenuButton2" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="icon.user.png" class="rounded-full"
              style="height: 25px; width: 25px" alt="" loading="lazy" />
              <ul class="ml-4 text-sm">user</ul>
          </a>
          <ul class="
          dropdown-menu
          min-w-max
          absolute
          hidden
          bg-white
          text-base
          z-50
          float-left
          py-2
          list-none
          text-left
          rounded-lg
          shadow-lg
          mt-1
          m-0
          bg-clip-padding
          border-none
          left-auto
          right-0
        " aria-labelledby="dropdownMenuButton2">
            <li>
              <a class="
              dropdown-item
              text-sm
              py-2
              px-4
              font-normal
              block
              w-full
              whitespace-nowrap
              bg-transparent
              text-gray-700
              hover:bg-gray-100
            " href="#">Keluar</a>
            </li>
  </div>
  </nav>
   <div class="container m-8">
    <div class="flex justify-center">
      <div class="block px-16 p-6 rounded-lg shadow-lg bg-white max-w-sm">
        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Status Peminjaman</h5>
        <hr>
        <p class="text-gray-700 text-base mb-2 mt-2 text-center">Berhasil Disetujui</p>
      </div>
    </div>
    <div class="flex justify-center  mt-4 ">
      <div class="block rounded-lg shadow-lg bg-white max-w-sm">
        <div class="text-center py-3 px-6 border-b border-gray-300">
          Featured
        </div>
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
          <form>
            <div class="form-group mb-5">
              <label for="" class="content-start text-gray-600 ">Nama</label>
              <input type="text" class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput90">
            </div>
            <div class="form-group mb-6">
              <label for="" class="content-start text-gray-600">Kelas</label>
              <input type="email" class="form-control block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput91"
                placeholder="Email address">
            </div>
            <div class="form-group form-check text-center mb-6">
              <input type="checkbox"
                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                id="exampleCheck96" checked>
              <label class="form-check-label inline-block text-gray-800" for="exampleCheck96">I have read and agree to the terms</label>
            </div>
            <button type="submit" class="
              w-full
              px-6
              py-2.5
              bg-blue-600
              text-white
              font-medium
              text-xs
              leading-tight
              uppercase
              rounded
              shadow-md
              hover:bg-blue-700 hover:shadow-lg
              focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
              active:bg-blue-800 active:shadow-lg
              transition
              duration-150
              ease-in-out">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
   </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

</html>