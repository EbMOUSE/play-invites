@extends('layouts.guest')

@section('slot')

<!-- temp -->
hi wassup (main)
@include('shared.post_invite')

<div>
    @foreach ( $invites as $invite )
        <div>
            <p>{{ $invite->title }}</p>
            <p>{{ $invite->description }}</p>
        </div>
    @endforeach
</div>

@endsection
