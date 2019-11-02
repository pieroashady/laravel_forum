<div class="card mb-3">
    <div class="card-header">
        Comment from <a href="#">{{ $reply->owner->name }}</a> 
        said {{ $reply->created_at->diffForHumans() }}...
    </div>
    <div class="card-body">
        {{ $reply->body }}
    </div>
</div>