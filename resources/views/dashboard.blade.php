<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Galvenā lapa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Jūs esat pieteicies sistēmā!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        @include('shared.post_invite')

        <div>
            @foreach ( $invites as $invite )
                <div>
                    <div>
                        <h6>username</h6>
                    </div>

                    <div>
                        <h1>{{ $invite->title }}</h1>
                    </div>

                    <div>
                        <p>{{ $invite->description }}</p>
                    </div>

                    <div>
                        <h6>{{ $invite->updated_at }}</h6>
                    </div>
                </div>
            @endforeach

            {{ $invites->links() }}
        </div>
    </div>
</x-app-layout>
