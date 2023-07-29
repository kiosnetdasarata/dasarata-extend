<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="/favicon.png" type="image/png" sizes="32x32">
    <title>Dasarata Login</title>
    <style>
        @media (max-width: 500px) {
            .flex {
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: screen;
            }

            .w-96 {
                width: 80%;
            }
        }
        @media (max-height: 500px) {
        .flex {
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: screen;
        }

        .h-auto {
            height: 80%;
        }
    }
    </style>
</head>

<body>
    <div class="flex h-screen w-screen justify-center items-center bg-no-repeat bg-center bg-cover"
        style="background-image: url('/img/bg5.png');">
        <div
            class="flex columns-1 w-96 h-auto bg-black border border-indigo-500 bg-opacity-10 rounded-3xl backdrop-blur-xl items-center">
            <div class="w-96 h-auto mx-12 my-8 overflow-auto">
                <div class="flex justify-center">
                    <img src="/img/logo-white.png" alt="Logo" class="w-48">
                </div>
                <h2 class="block text-white font-sans font-semibold text-2xl mt-4">Login</h2>
                <form action="#">
                    <div class="mt-6">
                        <div class="mb-6">
                            <label for="email"
                                class="block text-sm mb-1 font-light font-sans leading-none text-white dark:text-white">User</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="bg-slate-50 border border-gray-300 text-grey-900 text-sm rounded-lg focus:ring-darkBlue focus:border-darkBlue block w-full px-4 py-2 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                                placeholder="username@gmail.com" required autocomplete="off">
                        </div>
                        <div class="mb-6">
                            <label for="password"
                                class="block text-sm mb-1 font-light font-sans leading-none text-white dark:text-white">Password</label>
                            <input type="password" name="password" id="password"
                                class="bg-slate-50 border border-gray-300 text-grey-900 text-sm rounded-lg focus:ring-darkBlue focus:border-darkBlue block w-full px-4 py-2 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                                placeholder="password" required>
                        </div>
                        <button type="submit"
                            class="text-white font-bold bg-dasarataDarkBlue hover:bg-dasarataDarkBlue2 focus:ring-4 focus:outline-none rounded-lg text-sm w-full px-4 py-2 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Sign
                            in
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <div class="flex h-screen w-screen justify-center px-16 py-8 bg-cover bg-center bg-no-repeat" style="background-image: url('/img/bg5.png');">
        <div class="columns-1 h-full flex justify-center border border-indigo-500 bg-indigo-500 bg-opacity-10 rounded-3xl backdrop-blur-xl">
            <div class="grid grid-cols-2 gap-2">
                <div class="justify-center items-center inline-flex rounded-3xl">
                    <img src="https://source.unsplash.com/400x300/?networking" alt="Network"
                        class="w-full h-full rounded-r-3xl">
                </div>
                <div class="flex justify-center items-center py-8">
                    <div class="w-96 h-96 p-6">
                        <img src="/img/logo-white.png" alt="Logo" class="w-48">
                        <form action="#" class="mt-6">
                            <div class="my-3">
                                <label for="email"
                                    class="block text-sm mb-1 font-normal font-sans leading-none text-white dark:text-white">User</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    class="bg-slate-50 border border-gray-300 text-grey-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500 @error('email') is-invalid @enderror"
                                    placeholder="joko@gmail.com" required>
                            </div>
                            <div class="my-3">
                                <label for="password"
                                    class="block text-sm mb-1 font-normal text-white dark:text-white">Password</label>
                                <input type="password" name="password" id="password"
                                    class="bg-slate-50 border border-gray-300 text-grey-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
                                    required>
                            </div>
                            <div class="text-end text-sm my-3">
                                <a href="#" class="text-white">Forgot Password?</a>
                            </div>
                            <button>
                                <button type="submit"
                                    class="text-white bg-DarkBlue hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full px-4 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Login</button>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</body>

</html>
