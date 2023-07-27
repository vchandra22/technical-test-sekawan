<x-admin-layout title="Transaksi | Sekawan">
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <hr class="h-0.5 mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
        <div class="container mx-auto max-w-lg p-4 border-2 border-solid bg-white rounded-lg justify-center md:w-full">
            <div class="mb-24">
                <div class="items-center mb-12">
                    <h1>Transaksi Kendaraan</h1>
                </div>
                <form action="/transaksi/store" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="id_vehicles" class="block mb-2 text-sm font-medium text-gray-700">
                            Merek Kendaraan (Tersedia)
                        </label>
                        <select name="id_vehicles" id="id_vehicles"
                            class="bg-white border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Silakan pilih kendaraan</option>
                            @foreach ($kendaraan as $k)
                                <option value="{{ $k->id }}">
                                    <div class="font-semibold text-md">
                                        {{ $k->merek }} ({{ $k->nopol }})
                                    </div>
                                </option>
                            @endforeach
                        </select>
                        @error('id_vehicles')
                            <div class="mt-1 text-sm text-red-600" id="id_vehicles">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="id_users" class="block mb-2 text-sm font-medium text-gray-700">
                            Approval
                        </label>
                        <select name="id_users" id="id_users"
                            class="bg-white border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Silakan pilih approval</option>
                            @foreach ($user as $u)
                                <option value="{{ $u->id }}">
                                    <div class="font-semibold text-md">
                                        {{ $u->name }}
                                    </div>
                                </option>
                            @endforeach
                        </select>
                        @error('id_users')
                            <div class="mt-1 text-sm text-red-600" id="id_users">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="nama_driver" class="block mb-2 text-sm font-medium text-gray-700">
                            Nama Driver (Pengemudi)
                        </label>
                        <input type="text" name="nama_driver" id="nama_driver"
                            class="bg-white border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Marianto" required>
                        @error('nama_driver')
                            <div class="mt-1 text-sm text-red-600" id="nama_driver">
                                {{ $message }}
                            </div>
                        @enderror
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
