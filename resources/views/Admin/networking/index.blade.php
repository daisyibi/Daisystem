<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Networkings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>


            <x-primary-button style="margin-bottom: 12px;"><a href="{{ route('admin.customers.create') }}" class="btn-link btn-lg mb-2">Add a Customer</a></x-primary-button>
            @forelse ($networkings as $Networking)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">

                    <a href="{{ route('admin.networkings.show', $Networking) }}" style="font-weight: bolder;">{{ $customer->name }}</a>
                    </h2>



                    <p class="mt-2">
                        Desired Company:
                        {{$Networking->desired_company}}
                    </p>
                    <p class="mt-2">
                        Salary Expectation:
                        {{$Networking->salary_expectation}}
                    </p>
                    <p class="mt-2">
                        Salary Expectation:
                        {{$Networking->salary_expectation}}
                    </p>

                    <p class="mt-2">
                        Work Experience:
                        {{$Networking->work_experience}}
                    </p>

                    <p class="mt-2">
                        skills:
                        {{$Networking->skills}}
                    </p>

                    <p class="mt-2">
                        degree:
                        {{$Networking->degree}}
                    </p>


                    <p class="mt-2">
                        User ID:
                        {{$Networking->user_id}}

                    </p>

                </div>

            @empty
            <p>No Information</p>
            @endforelse

        </div>
    </div>
</x-app-layout>
