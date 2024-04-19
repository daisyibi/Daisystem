<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Event information
        </h2>
    </x-slot>

    <!-- Page Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <table class="table table-hover">
                        <tbody>
                            @foreach($events as $event)
                            <tr>
                                <td class="font-bold">Event ID </td>
                                <td>{{ $events->event_id }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold ">Description </td>
                                <td>{{ $events->description }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold ">Location </td>
                                <td>{{ $events->location }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold ">Date and time </td>
                                <td>{{ $events->date_time }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold ">Organiser ID </td>
                                <td>{{ $events->organiser_id }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold ">User ID </td>
                                <td>{{ $events->user_id }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
