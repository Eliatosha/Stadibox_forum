<div class="card-header">
    <div class="d-flex justify-content-between">
        <div>
        <span class="ml-2 font-weight-bold">{{ $discussion->author->name }}</span>
        </div>
        <div>
         <a href="{{ route('discussion.show', $discussion->slug) }}" class="btn btn-success"> View</a>
         </div>
     </div>
</div>