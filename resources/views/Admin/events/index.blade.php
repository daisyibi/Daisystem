<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>


            <x-primary-button style="margin-bottom: 12px;"><a href="{{ route('admin.customers.create') }}" class="btn-link btn-lg mb-2">Add a Customer</a></x-primary-button>
            @forelse ($events as $Event)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">

                    <a href="{{ route('admin.events.show', $Event) }}" style="font-weight: bolder;">{{ $userProfile->username }}</a>
                    </h2>



                    <p class="mt-2">
                        Title:
                        {{$events->title}}
                    </p>
                    <p class="mt-2">
                        description:
                        {{$events->description}}
                    </p>
                    <p class="mt-2">
                        location:
                        {{$events->location}}
                    </p>

                    <p class="mt-2">
                        Date and time:
                        {{$events->date_time}}
                    </p>

                    <p class="mt-2">
                        organiser id:
                        {{$events->organiser_id}}
                    </p>

                    <p class="mt-2">
                        Max Capacity:
                        {{$events->max_capacity}}
                    </p>

                    <p class="mt-2">
                        Event Id:
                        {{$events->event_id}}
                    </p>


                    <p class="mt-2">
                        User ID:
                        {{$events->user_id}}

                    </p>

                </div>

            @empty
            <p>No Information</p>
            @endforelse

        </div>
    </div>
</x-app-layout>
