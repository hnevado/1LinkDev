<x-app-layout>

    <div class="flex flex-col items-center justify-center py-10">
        <div class="max-w-md w-full">
            <div class="mb-6 p-4 bg-orange-100 rounded-lg shadow-md">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="mb-6 p-4 orange-100 rounded-lg shadow-md">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 orange-100 rounded-lg shadow-md">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
