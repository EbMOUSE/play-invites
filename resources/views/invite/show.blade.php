<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Galvenā lapa') }}
        </h2>
    </x-slot>

    <!-- Invite -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h6>username</h6>
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
    </div>


    <div>
        @include('invite.post_comment')

        <div class="py-12 p-6 text-gray-900 dark:text-gray-100">
            <h3>Komentāri</h3>
        </div>

        @include('shared.get_comments')
    </div>
</x-app-layout>
