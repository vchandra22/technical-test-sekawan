<x-admin-layout title="Log Activity | Sekawan">

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200" />
    <hr class="h-0.5 mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
    <h1>Log Activities</h1>
    <table class="items-center w-full mb-0 align-center mx-4 text-gray-700">
        <thead>
            <tr>
                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Date & Time</th>
                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
                <tr>
                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">{{ $log->created_at }}</td>
                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">{{ $log->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $logs->links() }}
    </main>
</x-admin-layout>
