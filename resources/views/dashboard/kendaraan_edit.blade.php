<x-admin-layout title="Edit Kendaraan | Sekawan">
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <hr class="h-0.5 mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
        <div class="container mx-auto max-w-lg p-4 border-2 border-solid bg-white rounded-lg justify-center md:w-full">
            <div class="mb-24">
                <div class="items-center mb-12">
                    <h1>Edit Kendaraan</h1>
                </div>
                <form action="{{ route('update.kendaraan', $kendaraan->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    @foreach ($kdDetail as $item)
                        <div class="mb-6">
                            <label for="merek" class="block mb-2 text-sm font-medium text-gray-700">
                                Merek Kendaraan
                            </label>
                            <input type="text" name="merek" id="merek"
                                class="bg-white border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                value="{{ $item->merek }}">
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
                                value="{{ $item->nopol }}">
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
                                value="{{ $item->bahan_bakar }}">
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
                        <div class="mb-6">
                            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Status Kendaraan
                            </label>
                            <select id="status" name="status"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected value="tersedia">Tersedia</option>
                                <option value="dipesan">Dipesan</option>
                                <option value="dipakai">Dipakai</option>
                                <option value="servis">Maintenance</option>
                            </select>
                        </div>
                    @endforeach
                    <button type="submit"
                        class="text-white mt-6 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                        style="background-color: #2563eb;">
                        Simpan
                    </button>
                </form>
                <div
                    class="text-white mt-4 border rounded-lg bg-rose-600 hover:bg-rose-700 hover:text-white cursor-pointer text-sm px-2 py-2 text-center md:mr-4 md:px-4 md:py-2 md:font-bold md:text-xl transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-8 duration-250" style="background-color: red">
                    <form action="{{ route('delete.kendaraan', $kendaraan->id) }}"
                        method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="delete-button" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-admin-layout>
