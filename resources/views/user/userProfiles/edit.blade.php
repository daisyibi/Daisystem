
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">



                <form action="{{ route('user.user_profile.update', $userProfile) }}" method="post" enctype="multipart/form-data">
                  @method('put')
                  @csrf
                  <x-text-input
                        type="text"
                        name="username"
                        field="username"
                        placeholder="Username"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('Username', $userProfile->username)">
                    </x-text-input>


                    <x-text-input
                        type="text"
                        name="email"
                        field="email"
                        placeholder="Email"
                        class="w-full mt-6"
                        :value="@old('Email', $userProfile->email)">
                    </x-text-input>

                    <x-text-input
                        type="text"
                        name="bio"
                        field="bio"
                        placeholder="Bio"
                        class="w-full mt-6"
                        :value="@old('Bio', $userProfile->Bio)">
                    </x-text-input>

                    <x-text-input
                    type="text"
                    name="contact information"
                    field="contact information"
                    placeholder="contact information"
                    class="w-full mt-6"
                    :value="@old('price', $userProfile->contact_information)">
                </x-text-input>

                <x-text-input
                    type="text"
                    name="preferences"
                    field="preferences"
                    placeholder="preferences"
                    class="w-full mt-6"
                    :value="@old('price', $userProfile->preferences)">
                </x-text-input>



                    <x-text-input
                        type="text"
                        name="User_id"
                        field="User_id"
                        placeholder="User Id"
                        class="w-full mt-6"
                        :value="@old('User_id', $Networking->userProfile->user_id)"></x-text-input>

                        <x-text-input
                        type="text"
                        name="event_id"
                        field="event_id"
                        placeholder="Event_Id"
                        class="w-full mt-6"
                        :value="@old('User_id', $events->userProfile->event_id)"></x-text-input>


                    <x-primary-button class="mt-6">Save Information</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
