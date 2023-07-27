<x-admin-layout title="Kendaraan | Sekawan">
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200" />
    <hr class="h-0.5 mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-2">
            <div
                class="relative flex flex-col w-full mb-6 break-words bg-white border-2 border-solid rounded-2xl bg-clip-border">
                <div
                    class="flex justify-between items-center p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    @can('approve')
                        <h6 class="lg:text-2xl text-gray-700">Data Transaksi Kendaraan (Approve)</h6>
                    @else
                        <h6 class="lg:text-2xl text-gray-700">Data Kendaraan</h6>
                    @endcan
                    @can('add kendaraan')
                        <div class="flex g-2">
                            <div>
                                <a href="/exportexcel" method="GET">
                                    <div
                                        class="text-white bg-gradient-to-r from-cyan-400 shadow-md to-cyan-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                        Export Excel
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="/transaksi" method="GET">
                                    <div
                                        class="text-white bg-gradient-to-r from-orange-400 shadow-md to-orange-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                        Pengajuan Peminjaman
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="/add-kendaraan" method="GET">
                                    <div
                                        class="text-white bg-gradient-to-r from-blue-700 shadow-md to-blue-800 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                        Tambah Kendaraan
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endcan
                </div>
                <div class="flex items-center pl-6">
                    <div class="flex">
                        <input type="search" name="search" id="search"
                            class="bg-base_00 border w-full border-base_80 text-hitam text-sm font-semibold rounded-[12px] focus:ring-blue-500 focus:border-blue-500 block p-2.5"
                            placeholder="Search">
                    </div>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-center mx-4 text-gray-700">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-1 py-3 font-bold center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        No.</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Merek Kendaraan</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Bahan Bakar</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Jenis</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Driver</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Status</th>
                                    @can('edit kendaraan')
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Aksi</th>
                                    @endcan
                                    @can('approve')
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Aksi</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody class="dataResult">
                                @can('approve')
                                    @php
                                        $count = 1;
                                    @endphp
                                    @if ($kVerifikator->count() > 0)
                                        @foreach ($kVerifikator as $item)
                                            @php
                                                if ($item['status'] == 'tersedia') {
                                                    $color = 'bg-green-500';
                                                } elseif ($item['status'] == 'dipesan') {
                                                    $color = 'bg-blue-600';
                                                } elseif ($item['status'] == 'dipakai') {
                                                    $color = 'bg-yellow-300';
                                                } elseif ($item['status'] == 'servis') {
                                                    $color = 'bg-red-600';
                                                }
                                            @endphp
                                            <tr>
                                                <td
                                                    class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p class="mb-0 font-semibold leading-tight text-xs">
                                                        {{ $count++ }}</p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent text-center">
                                                    <div class="flex px-2 py-1">
                                                        <div class="flex flex-col mx-auto">
                                                            <h6 class="mb-0 leading-normal text-sm text-center">
                                                                {{ $item->merek }}</h6>
                                                            <p
                                                                class="mb-0 leading-tight text-xs text-slate-400 text-center">
                                                                {{ $item->nopol }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p class="mb-0 font-semibold leading-tight text-xs text-center">
                                                        {{ $item->bahan_bakar }}
                                                    </p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p
                                                        class="mb-0 font-semibold leading-tight text-xs text-center capitalize">
                                                        Kendaraan {{ $item->jenis }}
                                                    </p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p
                                                        class="mb-0 font-semibold leading-tight text-xs text-center capitalize">
                                                        {{ $item->nama_driver }}
                                                    </p>
                                                    @empty($item->nama_driver)
                                                        <p
                                                            class="mb-0 font-semibold leading-tight text-xs text-center capitalize">
                                                            -
                                                        </p>
                                                    @endempty
                                                </td>
                                                <td
                                                    class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                                    <h3
                                                        class="{{ $color }} px-3 text-xs rounded-xl py-2 inline-block whitespace-nowrap text-center align-baseline font-semibold uppercase tracking-wide text-white hover:bg-opacity-80">
                                                        {{ $item->status }}
                                                    </h3>
                                                </td>
                                                @can('edit kendaraan')
                                                    <td
                                                        class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                                        <div
                                                            class="text-blue-500 bg-transparent hover:text-blue-900 text-sm px-2 py-2 text-center mr-2 md:mr-4 md:px-4 md:py-2 md:font-bold md:text-xl transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-8 duration-250">
                                                            <a href="{{ route('edit.kendaraan', Crypt::encryptString($item->id)) }}"
                                                                method="GET">
                                                                @csrf
                                                                <div>
                                                                    <span>Edit</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                @endcan
                                                @can('approve')
                                                    <td
                                                        class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                                        <div class="flex g-2 justify-center mb-2">
                                                            <form
                                                                action="{{ route('approve.kendaraan', Crypt::encryptString($item->id)) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div
                                                                    class="text-gray-100 rounded-lg bg-green-500 text-sm px-2 py-1 text-center mr-2 md:mr-4 md:px-4 md:py-2 md:font-bold md:text-xl transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-8 duration-250">
                                                                    <button type="submit">
                                                                        <i class="fa-solid fa-check"></i>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                            <form
                                                                action="{{ route('reject.kendaraan', Crypt::encryptString($item->id)) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div
                                                                    class="text-gray-100 rounded-lg bg-orange-500 text-sm px-2 py-1 text-center mr-2 md:mr-4 md:px-4 md:py-2 md:font-bold md:text-xl transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-8 duration-250">
                                                                    <button type="submit">
                                                                        <i class="fa-solid fa-hand"></i>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </td>
                                                @endcan
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8" class="text-center py-20">Ups! data tidak ditemukan.
                                            </td>
                                        </tr>
                                    @endif
                                @else
                                    @php
                                        $count = $count = 1;
                                    @endphp
                                    @if ($kendaraan->count() > 0)
                                        @foreach ($kendaraan as $item)
                                            @php
                                                if ($item['status'] == 'tersedia') {
                                                    $color = 'bg-green-500';
                                                } elseif ($item['status'] == 'dipesan') {
                                                    $color = 'bg-blue-600';
                                                } elseif ($item['status'] == 'dipakai') {
                                                    $color = 'bg-yellow-300';
                                                } elseif ($item['status'] == 'servis') {
                                                    $color = 'bg-red-600';
                                                }
                                            @endphp
                                            <tr>
                                                <td
                                                    class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p class="mb-0 font-semibold leading-tight text-xs">
                                                        {{ $count++ }}</p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent text-center">
                                                    <div class="flex px-2 py-1">
                                                        <div class="flex flex-col mx-auto">
                                                            <h6 class="mb-0 leading-normal text-sm text-center">
                                                                {{ $item->merek }}</h6>
                                                            <p
                                                                class="mb-0 leading-tight text-xs text-slate-400 text-center">
                                                                {{ $item->nopol }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p class="mb-0 font-semibold leading-tight text-xs text-center">
                                                        {{ $item->bahan_bakar }}
                                                    </p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p
                                                        class="mb-0 font-semibold leading-tight text-xs text-center capitalize">
                                                        Kendaraan {{ $item->jenis }}
                                                    </p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p
                                                        class="mb-0 font-semibold leading-tight text-xs text-center capitalize">
                                                        {{ $item->nama_driver }}
                                                    </p>
                                                    @empty($item->nama_driver)
                                                        <p
                                                            class="mb-0 font-semibold leading-tight text-xs text-center capitalize">
                                                            -
                                                        </p>
                                                    @endempty
                                                </td>
                                                <td
                                                    class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                                    <h3
                                                        class="{{ $color }} px-3 text-xs rounded-xl py-2 inline-block whitespace-nowrap text-center align-baseline font-semibold uppercase tracking-wide text-white hover:bg-opacity-80">
                                                        {{ $item->status }}
                                                    </h3>
                                                </td>
                                                @can('edit kendaraan')
                                                    <td
                                                        class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                                        <div
                                                            class="text-blue-500 bg-transparent hover:text-blue-900 text-sm px-2 py-2 text-center mr-2 md:mr-4 md:px-4 md:py-2 md:font-bold md:text-xl transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-8 duration-250">
                                                            <a href="{{ route('edit.kendaraan', Crypt::encryptString($item->id)) }}"
                                                                method="GET">
                                                                @csrf
                                                                <div>
                                                                    <span>Edit</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                @endcan
                                                @can('approve')
                                                    <td
                                                        class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                                        <div class="flex g-2 justify-center mb-2">
                                                            <form
                                                                action="{{ route('approve.kendaraan', Crypt::encryptString($item->id)) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div
                                                                    class="text-gray-100 rounded-lg bg-green-500 text-sm px-2 py-1 text-center mr-2 md:mr-4 md:px-4 md:py-2 md:font-bold md:text-xl transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-8 duration-250">
                                                                    <button type="submit">
                                                                        <i class="fa-solid fa-check"></i>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                            <form
                                                                action="{{ route('reject.kendaraan', Crypt::encryptString($item->id)) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div
                                                                    class="text-gray-100 rounded-lg bg-orange-500 text-sm px-2 py-1 text-center mr-2 md:mr-4 md:px-4 md:py-2 md:font-bold md:text-xl transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-8 duration-250">
                                                                    <button type="submit">
                                                                        <i class="fa-solid fa-hand"></i>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </td>
                                                @endcan
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8" class="text-center py-20">Ups! data tidak ditemukan.
                                            </td>
                                        </tr>
                                    @endif
                                @endcan
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    </main>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'csrftoken': '{{ csrf_token() }}'
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var value = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "/search",
                    data: {
                        'search': value
                    },
                    success: function(data) {
                        $('.dataResult').html(data);
                    }
                });
            });
        });
    </script>
</x-admin-layout>
