<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            @if($editing ?? false)
            {
                <form action="{{ route('invite.update', $invite) }}">
                    @csrf
                    <div>
                        <input type="text" name="newTitle" maxlength="35" value="{{ $invite->title }}">
                    </div>

                    <div>
                        <textarea name="newDescription" rows="7" cols="45"
                            maxlength="200">{{ $invite->description }}</textarea>
                    </div>

                    <div>
                        <button type="submit">
                            Publicēt!
                        </button>
                    </div>
                </form>
            }
            @else
            {
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h6>username</h6>

                    @if ( $invite->user_id == Auth::user()->id )
                        @include('invite.edit_destroy')
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
            }
            @endif
        </div>
    </div>
</div>
