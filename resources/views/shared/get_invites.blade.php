<div>
    @foreach ( $invites as $invite )
    <div>
        <div>
            <h6>{{ usr }}</h6>
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
</div>
