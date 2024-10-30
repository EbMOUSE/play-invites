<div>
    <form action="{{ route('invite.post') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="title" placeholder="Virsraksts">
        </div>

        <div>
            <textarea name="body" rows="7" cols="45"
            placeholder="Ievadiet aprakstu. Cik cilvēkus vajag, cik ilgi spēlēsiet u.c."></textarea>
        </div>

        <div>
            <select name="game">
                <option value="1">Option</option>
                <option value="2">YAHHOO!!!!!!!!!</option>
            </select>
        </div>

        <div>
            <button type="submit">
                Publicēt!
            </button>
        </div>
    </form>
</div>
