<div class="border-style: solid;">
    <form action="{{ route("invite.show") }}" method="GET">
        @foreach ( $invites as $invite )
            <div>
                <div>
                    <h6>{{ $this->Auth::user()->name }}</h6>
                </div>

                <div>
                    <h1>{{ $invite->title }}</h1>
                </div>

                <div>
                    <p>{{ $invite->description }}</p>
                </div>

                <div>
                    <h6>{{ $invite->updated_at }}</h6>
            </div>
        @endforeach
    </form>
</div>
