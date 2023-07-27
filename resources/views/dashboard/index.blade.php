<x-admin-layout title="Dashboard | Sekawan">

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200" />
    <hr class="h-0.5 mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
    <div class="container mt-12 p-8 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
        {!! $chart->container() !!}
    </div>
    </main>
    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
    @include('sweetalert::alert')
</x-admin-layout>
