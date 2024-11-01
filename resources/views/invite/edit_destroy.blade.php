<form action="{{ route('invite.edit', $invite) }}">
    <button type="submit" name="edit">Rediģēt</button>
</form>

<form action="{{ route('invite.destroy', $invite) }}">
    @method('delete')
    <button type="submit" name="delete">Dzēst</button>
</form>
