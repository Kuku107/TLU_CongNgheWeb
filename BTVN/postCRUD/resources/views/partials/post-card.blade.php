<div class="card w-100">
    <div class="card-header">
        <h5 class="card-title">{{ $post->title }}</h5>
    </div>
    <div class="card-body">
        <p class="card-text">{{ Str::limit($post->content, 100, '...') }}</p>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-sm">
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a>
            </div>
            <div class="col-sm">
                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
