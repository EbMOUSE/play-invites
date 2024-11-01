<div style="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <form action="{{ route('invite.create') }}" method="POST">
            @csrf
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <input type="text" name="title" placeholder="Virsraksts" maxlength="35">
            </div>

            <div class="p-6 text-gray-900 dark:text-gray-100">
                <textarea name="description" rows="7" cols="45" maxlength="200"
                placeholder="Ievadiet aprakstu. Cik cilvēkus vajag, cik ilgi spēlēsiet u.c."></textarea>
            </div>

            <div class="p-6">
                @include('shared.get_games')
            </div>

            <div class="p-6 text-gray-900 dark:text-gray-100">
                <button type="submit">
                    Pievienot!
                </button>
            </div>
        </form>
    </div>
</div>

