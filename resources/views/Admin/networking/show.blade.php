<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            User Profile information
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

                          <!-- Display the label Name in bold. -->
                            <tr>
                                <td class="font-bold">Event ID </td>

                                <td>{{ $events->userProfile->event_id }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold ">Username </td>
                                <td>{{ $userProfile->username }}</td>
                            </tr>

                            <tr>
                                <td class="font-bold ">Email </td>
                                <td>{{ $userProfile->email }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold ">Bio </td>
                                <td>{{ $userProfile->Bio }}</td>
                            </tr>
                            <tr>
                                <td class="font-bold ">Contact Information </td>
                                <td>{{ $userProfile->contact_information }}</td>
                            </tr>





                            <tr>
                                <td class="font-bold ">User Id </td>
                                <td>{{ $Networking->userProfile->user_id }}</td>
                            </tr>
                        </tbody>
                    </table>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
