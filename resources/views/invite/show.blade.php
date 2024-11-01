<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Galvenā lapa') }}
        </h2>
    </x-slot>

    <!--div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                </div>
            </div>
        </div>
    </div-->

    <!-- Invite -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h6>{{ $user->name }}</h6>
                @if ( $invite->user_id == Auth::user()->id )
                    <button action="" name="edit">Rediģēt</button>
                    <button action="" name="delete">Dzēst</button>
                @endif
            </div>

            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1>{{ $invite->title }}</h1>
            </div>

            <div class="p-6 text-gray-900 dark:text-gray-100">
                <p>{{ $invite->description }}</p>
            </div>

            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h6>{{ $invite->updated_at }}</h6>
            </div>
        </div>
    </div>
</x-app-layout>
