<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body class="flex font-sans leading-normal tracking-wider bg-cover bg-no-repeat" style="background-image:url('back.jpg');">
    <div class="container justify-center m-9 px-12">
        <div class="container text-center pt-40 mb-4">
            <div class="animate__animated animate__fadeIn">
                <div class="text-white text-4xl font-bold">
                    <h1>Jadwal Peminjaman</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-col place-self-center animate__animated animate__fadeIn">
            <div class="overflow-y-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-4">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="bg-yellow-400 text-white border-b">
                                <tr>
                                    <th scope="col" class="text-sm font-medium  px-6 py-4 text-left">
                                        No
                                    </th>
                                    <th scope="col" class="text-sm font-medium  px-6 py-4 text-left">
                                        Nama
                                    </th>
                                    <th scope="col" class="text-sm font-medium  px-6 py-4 text-left">
                                        Last
                                    </th>
                                    <th scope="col" class="text-sm font-medium px-6 py-4 text-left">
                                        Handle
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-transparent border-b text-gray-100 transition duration-300 ease-in-out hover:bg-gray-100 hover:text-gray-600">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">1</td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">
                                        Mark
                                    </td>
                                    <td class="text-sm font-light px-6 py-4 whitespace-nowrap">
                                        Otto
                                    </td>
                                    <td class="text-sm  font-light px-6 py-4 whitespace-nowrap">
                                        @mdo
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>