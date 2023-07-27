<x-app-layout title="Login Sekawan Media">
    <section class="bg-gray-100">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
                <img class="w-12 h-12 mr-2" src="{{ url('img/sekawan-logo.png') }}" alt="logo sekawan">
                <h3 class="text-4xl font-bold text-blue-600">Sekawan</h3>
            </a>
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                        Login
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="#">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                                Alamat email
                            </label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                                placeholder="vincentchaandara@gmail.com" required="">
                            <p class="text-xs text-gray-300">Masukkan alamat email yang telah di daftarkan</p>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                                required="">
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Masuk
                        </button>
                        <p class="text-sm font-light text-gray-500">
                            Tidak punya akun?<a href="#"
                                class="font-medium text-blue-600 hover:underline"> Mendaftar</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
