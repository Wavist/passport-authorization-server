<div class="container">

    <div class="flex items-center justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($users as $user)
                <div class="md:flex bg-white w-auto rounded-lg p-6 m-2 flex-wrap">
                    <img class="h-16 w-16 md:h-24 md:w-24 rounded-full mx-auto md:mx-0 md:mr-6" src="https://vignette.wikia.nocookie.net/spiceandwolf/images/4/43/Horo.jpg/revision/latest?cb=20100410062559">
                    <div class="text-center md:text-left w-full">
                        <h2 class="text-lg">{{ $user->name }}</h2>
                        <div class="text-purple-500">&#64;{{ $user->username }}</div>
                        <div class="text-gray-600">{{ $user->email }}</div>
                        <div class="text-gray-600">(555) 765-4321</div>
                        <div class="border-black mt-2 flex">
                            <a href="/" class="flex-1 mx-1 px-2 bg-blue-700 text-white rounded-lg py-1 font-bold hover:no-underline hover:bg-blue-800">
                                Ver
                            </a>
                            <a href="/" class="flex-1 mx-1 px-2 bg-green-700 text-white rounded-lg py-1 font-bold hover:no-underline hover:bg-green-800">
                                Editar
                            </a>
                            <a href="/" class="flex-1 mx-1 px-2 bg-red-700 text-white rounded-lg py-1 font-bold hover:no-underline hover:bg-red-800">
                                Eliminar
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>