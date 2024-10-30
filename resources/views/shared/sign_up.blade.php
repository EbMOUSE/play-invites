<div>
    <form action="{{ route('user.sign_up') }}">
        <div>
            <label for="name">
                Lietotājvārds:
            </label>

            <input id="name" name="name">
        </div>

        <div>
            <label for="email">
                E-pasts:
            </label>

            <input id="email" name="email">
        </div>

        <div>
            <label for="password">
                E-pasts:
            </label>

            <input id="password" name="password">
        </div>

        <div>
            <label for="password-confirm">
                E-pasts:
            </label>

            <input id="password-confirm" name="password-confirm">
        </div>

        <div>
            <button type="submit">
                Reģistrēties!
            </button>
    </form>
</div>
