<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Networking') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('user.networking.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- text box for the name -->
                    <x-text-input
                        type="text"
                        name="desired_company"
                        field="name"
                        placeholder="Desired Company"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('desired_company')"></x-text-input>
                        <!-- @old displays the previous name -->

                    <!-- text box for the type -->
                    <x-text-input
                        type="text"
                        name="salary_expectation"
                        field="salary_expectation"
                        placeholder="Salary Expectation"
                        class="w-full mt-6"
                        :value="@old('salary_expectation')"></x-text-input>


                    <x-text-input
                        type="text"
                        name="work_experience"
                        field="work_experience"
                        placeholder="Work Experience"
                        class="w-full mt-6"
                        :value="@old('work_experience')"></x-text-input>

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
                      name="skills"
                      field="skills"
                      placeholder="Skills"
                      class="w-full mt-6"
                      :value="@old('skills')"></x-text-input>

                      <x-text-input
                      type="text"
                      name="degree"
                      field="degree"
                      placeholder="Degree"
                      class="w-full mt-6"
                      :value="@old('degree')"></x-text-input>


                    <x-text-input
                        type="text"
                        name="user_id"
                        field="user_id"
                        placeholder="User Id"
                        class="w-full mt-6"
                        :value="@old('User Id')"></x-text-input>


                    <x-primary-button class="mt-6">Save Information</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
