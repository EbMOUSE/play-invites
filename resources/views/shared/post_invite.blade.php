<div>
    <form action="{{ route('invite.create') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="title" placeholder="Virsraksts" maxlength="35">
        </div>

        <div>
            <textarea name="description" rows="7" cols="45" maxlength="200"
            placeholder="Ievadiet aprakstu. Cik cilvēkus vajag, cik ilgi spēlēsiet u.c."></textarea>
        </div>

        <div>
            <select name="game_id">
                <option value="0">Option</option>
                <option value="1">YAHHOO!!!!!!!!!</option>
            </select>
        </div>

        <div>
            <button type="submit">
                Publicēt!
            </button>
        </div>
    </form>
</div>
