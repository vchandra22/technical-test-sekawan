<x-admin-layout title="Ubah Password | Sekawan">
    <main class="xl:ml-68.5 mt-4 my-auto md:flex md:justify-center">
        <div class="container flex flex-wrap h-full w-full max-w-full p-4 bg-gray-100 border-2 rounded-2xl md:w-full">
            <div class="break-words mb-4 bg-gray-100 border-0 border-solid rounded-[12px] bg-clip-border">
                <div class="w-full mx-auto p-2">
                    <div class="flex w-full">
                        <div class="max-w-full px-1 mt-4 ml-0 text-center lg:mt-0 lg:flex-none">
                            <div class="h-18 bg-gradient-to-tl from-blue-600 to-red-400 rounded-xl">
                                <div class="flex items-center justify-center h-full">
                                    <i class="fa-solid fa-user fa-2x px-3 py-3 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="max-w-full pt-4 px-3 lg:w-1/2 lg:flex lg:flex-none lg:pt-0">
                            <div class="flex h-full">
                                <h3 class="font-bold text-2xl w-full">Ubah Password</h3>
                            </div>
                        </div>
                    </div>
                    <div class="container h-full w-full p-4 rounded-2xl bg-clip-border md:w-full">
                        <form action="{{ route('password.update') }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div>
                                <label for="old_password"
                                    class="block mb-1 mt-4 text-sm font-medium text-hitam md:text-lg">
                                    Password Lama
                                </label>
                                <input type="password" name="old_password" id="old_password"
                                    class=" mx-auto bg-gray-100 border border-gray-500 text-hitam text-sm rounded-[12px] focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    value="">
                                @error('old_password')
                                    <div class="mt-1 text-sm text-red-600" id="old_password">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="password" class="block mb-1 mt-4 text-sm font-medium text-hitam md:text-lg">
                                    Password Baru
                                </label>
                                <input type="password" name="password" id="password"
                                    class="bg-gray-100 border border-gray-500 text-hitam text-sm rounded-[12px] focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    value="">
                                @error('password')
                                    <div class="mt-1 text-sm text-red-600" id="password">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="konfirmasi_password"
                                    class="block mb-1 mt-4 text-sm font-medium text-hitam md:text-lg">
                                    Konfirmasi Password
                                </label>
                                <input type="password" name="konfirmasi_password" id="konfirmasi_password"
                                    class="bg-gray-100 border border-gray-500 text-hitam text-sm rounded-[12px] focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    value="">
                                @error('konfirmasi_password')
                                    <div class="mt-1 text-sm text-red-600" id="konfirmasi_password">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit">
                                <div
                                    class="px-28 w-full py-2 mt-8 bg-blue-600 rounded-[12px] border-base_60 text-xl text-semibold text-center text-white cursor-pointer hover:opacity-90 md:px-64">
                                    Simpan
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>
