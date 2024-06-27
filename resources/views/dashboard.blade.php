<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 text-lg">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-auto shadow-xl sm:rounded-lg px-3">
                <div class="container py-6 mx-auto">
                    <h1 class="text-xl font-bold mb-6 px-1">List User</h1>
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-800 text-white text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-left">Email</th>
                                <th class="py-3 px-6 text-left">Last Seen</th>
                                <th class="py-3 px-6 text-left">Status</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 font-light">
                            @foreach ($users as $user)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6">{{ $user->name }}</td>
                                <td class="py-3 px-6">{{ $user->email }}</td>
                                <td class="py-3 px-6">{{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}</td>
                                <td class="py-3 px-6 text-center">
                                    <span class="text-white py-1 px-3 rounded-full text-lg" style="background-color: {{ $user->last_seen >= now()->subMinutes(1) ? '#10B981' : '#EF4444' }}">
                                        {{ $user->last_seen >= now()->subMinutes(1) ? 'Online' : 'Offline' }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
