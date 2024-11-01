@foreach ($comments as $comment)
    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h6>username</h6>
            </div>

            <div class="p-6 text-gray-900 dark:text-gray-100">
                <p>{{ $comment->comment }}</p>
            </div>

            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h6>{{ $comment->updated_at }}</h6>
            </div>
        </div>
    </div>
@endforeach
