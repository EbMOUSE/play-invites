<div>
    <div>
        <div>
            <h6>{{ $this->Auth::user()->name }}</h6>
        </div>

        <div>
            <p>{{ $comment->comment }}</p>
        </div>

        <div>
            <h6>{{ $comment->updated_at }}</h6>
        </div>
    </div>
</div>
