<div style="border-style: solid;">
    <form action="{{ route('comment.create', $invite->id) }}" method="POST">
        @csrf
        <div>
            <label for="comment">Pievienot komentāru</label>
            <textarea id="comment" name="comment" rows="6" cols="20" maxlength="150"
            placeholder="Teksts"></textarea>
        </div>

        <div>
            <button type="submit">
                Pievienot!
            </button>
        </div>
    </form>
</div>
