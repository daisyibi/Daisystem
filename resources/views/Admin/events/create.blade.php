
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create events') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('admin.events.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- text box for the name -->
                    <x-text-input
                        type="text"
                        name="title"
                        field="name"
                        placeholder="title"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('title')"></x-text-input>
                        <!-- @old displays the previous name -->

                    <!-- text box for the type -->
                    <x-text-input
                        type="text"
                        name="description"
                        field="description"
                        placeholder="description"
                        class="w-full mt-6"
                        :value="@old('description')"></x-text-input>


                    <x-text-input
                        type="text"
                        name="location"
                        field="location"
                        placeholder="location"
                        class="w-full mt-6"
                        :value="@old('location')"></x-text-input>

                    <!-- text box for inputting the image file url -->
                    {{-- <x-file-input
                        type="file"
                        name="customer_image"
                        placeholder="Customer"
                        class="w-full mt-6"
                        field="customer_image"
                        :value="@old('customer_image')">>
                    </x-file-input> --}}

                      <!-- text box for the type -->
                      <x-text-input
                      type="text"
                      name="date_time"
                      field="date_time"
                      placeholder="Date and Time"
                      class="w-full mt-6"
                      :value="@old('date_time')"></x-text-input>

                      <x-text-input
                      type="text"
                      name="organiser_id"
                      field="organiser_id"
                      placeholder="organiser_id"
                      class="w-full mt-6"
                      :value="@old('Organiser id')"></x-text-input>

                      <x-text-input
                      type="text"
                      name="max_capacity"
                      field="max_capacity"
                      placeholder="Max Capacity"
                      class="w-full mt-6"
                      :value="@old('max_capacity')"></x-text-input>


                    <x-text-input
                        type="text"
                        name="user_id"
                        field="user_id"
                        placeholder="User Id"
                        class="w-full mt-6"
                        :value="@old('User Id')"></x-text-input>

                        <x-text-input
                        type="text"
                        name="event_id"
                        field="event_id"
                        placeholder="Event Id"
                        class="w-full mt-6"
                        :value="@old('Event Id')"></x-text-input>


                    <x-primary-button class="mt-6">Save Information</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
