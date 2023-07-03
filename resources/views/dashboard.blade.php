<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-7xl mx-auto">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">#</th>
                                    <th scope="col" class="px-6 py-3">Name</th>
                                    <th scope="col" class="px-6 py-3">Email</th>
                                    <th scope="col" class="px-6 py-3">Division</th>
                                    <th scope="col" class="px-6 py-3">Location</th>
                                    <th scope="col" class="px-6 py-3">Shirt Size</th>
                                    <th scope="col" class="px-6 py-3">Jersey Size</th>
                                    <th scope="col" class="px-6 py-3">Diet Preference</th>
                                    <th scope="col" class="px-6 py-3">Food Allegies</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $key => $user)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4">{{$key + 1}}</td>
                                        <td class="px-6 py-4">{{$user->name}}</td>
                                        <td class="px-6 py-4">{{$user->email}}</td>
                                        <td class="px-6 py-4"> {{$user->division}} </td>
                                        <td class="px-6 py-4"> {{$user->location}} </td>
                                        <td class="px-6 py-4"> {{$user->shirt}} </td>
                                        <td class="px-6 py-4">{{$user->jersey}}</td>
                                        <td class="px-6 py-4">{{$user->diet}}</td>
                                        <td class="px-6 py-4">{{$user->allegy}}</td>
                                    </tr>
                                @endforeach

                                @empty($users)
                                    <tr>
                                        <td class='text-center py-5' colspan={8}>No Records Found</td>
                                    </tr>
                                @endempty

                            </tbody>
                        </table>
                    </div>
                    <div class='p-3'>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
