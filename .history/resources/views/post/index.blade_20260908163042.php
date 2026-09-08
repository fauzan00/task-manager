<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged insss!") }}
                </div>

                <table class="table-auto" style="border: 1px solid black;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('post.show', $user) }}" class="text-green-500">Show</a>
                                    <a href="{{ route('post.edit', $user) }}" class="text-blue-500">Edit</a>
                                    <a href="{{ route('post.destroy', ['user' => $user]) }}"
                                        class="text-red-500">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
