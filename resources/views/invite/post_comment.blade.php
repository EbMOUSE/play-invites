<div style="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <form action="{{ route('comment.create', $invite->id) }}" method="POST">
            @csrf
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <label for="comment">Pievienot komentāru</label>
                <textarea id="comment" name="comment" rows="6" cols="20" maxlength="150"
                placeholder="Teksts"></textarea>
            </div>

            <div class="p-6 text-gray-900 dark:text-gray-100">
                <button type="submit">
                    Pievienot!
                </button>
            </div>
        </form>
    </div>
</div>
