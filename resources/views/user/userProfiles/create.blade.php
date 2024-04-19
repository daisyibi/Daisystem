<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Profile') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('user.userProfiles.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- text box for the name -->
                    <x-text-input
                        type="text"
                        name="username"
                        field="username"
                        placeholder="Username"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('username')"></x-text-input>
                        <!-- @old displays the previous name -->

                    <!-- text box for the type -->
                    <x-text-input
                        type="text"
                        name="email"
                        field="email"
                        placeholder="email"
                        class="w-full mt-6"
                        :value="@old('Email')"></x-text-input>

                        <x-text-input
                        type="text"
                        name="bio"
                        field="type"
                        placeholder="Bio"
                        class="w-full mt-6"
                        :value="@old('Bio')"></x-text-input>


                    <x-text-input
                        type="text"
                        name="Contact Information"
                        field="Contact Information"
                        placeholder="Contact Information"
                        class="w-full mt-6"
                        :value="@old('Contact Information')"></x-text-input>




                    <x-primary-button class="mt-6">Save Information</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
