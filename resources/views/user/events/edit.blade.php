
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">



                <form action="{{ route('user.events.update', $events) }}" method="post" enctype="multipart/form-data">
                  @method('put')
                  @csrf
                  <x-text-input
                  type="text"
                  name="title"
                  field="title"
                  placeholder="title"
                  class="w-full"
                  autocomplete="off"
                  :value="@old('title', $events->title)">
                    </x-text-input>


                    <x-text-input
                        type="text"
                        name="description"
                        field="description"
                        placeholder="description"
                        class="w-full mt-6"
                        :value="@old('description', $events->description)">
                    </x-text-input>

                    <x-text-input
                        type="text"
                        name="location"
                        field="location"
                        placeholder="location"
                        class="w-full mt-6"
                        :value="@old('location', $events->location)">
                    </x-text-input>

                    {{-- <x-file-input
                        type="file"
                        name="customer_image"
                        placeholder="Customer"
                        class="w-full mt-6"
                        field="customer_image">
                    </x-file-input> --}}
                    <x-text-input
                    type="text"
                    name="date_time"
                    field="date_time"
                    placeholder="date and time"
                    class="w-full mt-6"
                    :value="@old('date_time', $events->date_time)">
                </x-text-input>

                <x-text-input
                    type="text"
                    name="organiser_id"
                    field="organiser_id"
                    placeholder="organiser_id"
                    class="w-full mt-6"
                    :value="@old('organiser_id', $events->organiser_id)">
                </x-text-input>


                    <x-text-input
                        type="text"
                        name="user_id"
                        field="type"
                        placeholder="user Id"
                        class="w-full mt-6"
                        :value="@old('user_id', $userProfile->events->user_id)"></x-text-input>

                        <x-text-input
                        type="text"
                        name="event_id"
                        field="type"
                        placeholder="Event Id"
                        class="w-full mt-6"
                        :value="@old('event_id', $events->event_id)"></x-text-input>


                    <x-primary-button class="mt-6">Save Information</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
