<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Galvenā lapa') }}
        </h2>
    </x-slot>

    <!-- Invite -->
    @include('invite.post_edit')

    <div>
        @include('invite.post_comment')

        <div class="py-12 p-6 text-gray-900 dark:text-gray-100">
            <h3>Komentāri</h3>
        </div>

        @include('shared.get_comments')
    </div>
</x-app-layout>
