<div>
    <form action="{{ route('invite.comment.create') }}" method="POST">
        @csrf
        <div>
            <label for="comment">Pievienot komentāru</label>
            <textarea id="comment" name="comment" rows="6" cols="20" maxlength="150"
            placeholder="Teksts"></textarea>
        </div>

        <div>
            <select name="game_id">
                <option value="0">Option</option>
                <option value="1">YAHHOO!!!!!!!!!</option>
            </select>
        </div>

        <div>
            <button type="submit">
                Pievienot!
            </button>
        </div>
    </form>
</div>
