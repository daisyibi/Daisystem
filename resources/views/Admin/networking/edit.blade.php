
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Networking') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">



                <form action="{{ route('admin.networkings.update', $networkings) }}" method="post" enctype="multipart/form-data">
                  @method('put')
                  @csrf
                  <x-text-input
                  type="text"
                  name="desired_company"
                  field="desired_company"
                  placeholder="Desired Company"
                  class="w-full"
                  autocomplete="off"
                  :value="@old('desired_company', $Networking->desired_company)">
                    </x-text-input>


                    <x-text-input
                        type="text"
                        name="salary_expectation"
                        field="salary_expectation"
                        placeholder="Salary Expectation"
                        class="w-full mt-6"
                        :value="@old('salary_expectation', $Networking->salary_expectation)">
                    </x-text-input>

                    <x-text-input
                        type="text"
                        name="work_experience"
                        field="work_experience"
                        placeholder="Work Experience"
                        class="w-full mt-6"
                        :value="@old('work_experience', $Networking->work_experience)">
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
                    name="skills"
                    field="skills"
                    placeholder="skills"
                    class="w-full mt-6"
                    :value="@old('skills', $Networking->skills)">
                </x-text-input>

                <x-text-input
                    type="text"
                    name="degree"
                    field="degree"
                    placeholder="degree"
                    class="w-full mt-6"
                    :value="@old('degree', $Networking->degree)">
                </x-text-input>

                    <x-text-input
                        type="text"
                        name="user_id"
                        field="type"
                        placeholder="user Id"
                        class="w-full mt-6"
                        :value="@old('user_id', $userProfile->user_id)"></x-text-input>


                    <x-primary-button class="mt-6">Save Information</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
