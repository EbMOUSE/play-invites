<div>
    <form action="{{ route('user.sign_in') }}">
        <div>
            <label for="identifier">
                Lietotājvārds vai e-pasts:
            </label>

            <input id="identifier" name="identifier">
        </div>

        <div>
            <label for="password">
                E-pasts:
            </label>

            <input id="password" name="password">
        </div>

        <div>
            <button type="submit">
                Ienākt!
            </button>
    </form>
</div>
