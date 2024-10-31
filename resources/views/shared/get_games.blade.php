<div>
    @php
        $games = App\Models\Game::all();
    @endphp

    <select name="game_id">
        @foreach ($games as $game)
            <option value="{{ $game['id'] }}">
                {{ $game['name'] }}
            </option>
        @endforeach
    </select>
</div>
