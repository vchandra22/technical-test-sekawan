<x-admin-layout title="Tambah Kendaraan | Sekawan">
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <hr class="h-0.5 mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
        <div class="container mx-auto max-w-lg p-4 border-2 border-solid bg-white rounded-lg justify-center md:w-full">
            <div class="mb-24">
                <div class="items-center mb-12">
                    <h1>Tambah Kendaraan Baru</h1>
                </div>
                <form action="/kendaraan/store" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="merek" class="block mb-2 text-sm font-medium text-gray-700">
                            Merek Kendaraan
                        </label>
                        <input type="text" name="merek" id="merek"
                            class="bg-white border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Toyota Kijang Innova" required>
                        @error('merek')
                            <div class="mt-1 text-sm text-red-600" id="merek">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="nopol" class="block mb-2 text-sm font-medium text-gray-700">
                            Nopol Kendaraan
                        </label>
                        <input type="text" name="nopol" id="nopol"
                            class="bg-white border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="N 1112 OBN" required>
                        @error('nopol')
                            <div class="mt-1 text-sm text-red-600" id="nopol">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="bahan_bakar" class="block mb-2 text-sm font-medium text-gray-700">
                            Jenis Bahan Bakar
                        </label>
                        <input type="text" name="bahan_bakar" id="bahan_bakar"
                            class="bg-white border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Gasoline" required>
                        @error('bahan_bakar')
                            <div class="mt-1 text-sm text-red-600" id="bahan_bakar">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Pilih Jenis Kendaraan
                        </label>
                        <select id="jenis" name="jenis"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="penumpang">Penumpang</option>
                            <option value="barang">Barang</option>
                        </select>
                    </div>
                    <div class="mb-6 hidden">
                        <select id="status" name="status" hidden
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="tersedia">tersedia</option>
                        </select>
                    </div>
                    <button type="submit"
                        class="text-white mt-6 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                        style="background-color: #2563eb;">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </main>
</x-admin-layout>
