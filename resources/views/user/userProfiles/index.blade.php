<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Users Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>


            @forelse ($userProfiles as $userProfile)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">

                    {{-- <a href="{{ route('user.userProfiles.show', $userProfile) }}" style="font-weight: bolder;">{{ $userProfile->username }}</a> --}}
                    </h2>
                    <p class="mt-2">
                        <h3 class="font-bold test-1x1">
                            <strong> User Profiles </strong>
                            {{-- {{$events->userProfile->username}} --}}
                            {{$userProfile->description}}


                        </h3>
                    </p>

                    <p class="mt-2">
                        Username:
                        {{$userProfile->username}}
                    </p>


                    <p class="mt-2">
                        Email:
                        {{$userProfile->email}}

                    </p>

                    <p class="mt-2">
                        Bio:
                        {{$userProfile->bio}}

                    </p>

                    <p class="mt-2">
                        Contact Information:
                        {{$userProfile->contact_information}}

                    </p>

                    <p class="mt-2">
                        Preferences:
                        {{$userProfile->preferences}}

                    </p>


                </div>

                <!-- If there are no students in the collection, display a message indicating that theres no students -->
            @empty
            <p>No User Profile users</p>
            @endforelse

        </div>
    </div>
</x-app-layout>
