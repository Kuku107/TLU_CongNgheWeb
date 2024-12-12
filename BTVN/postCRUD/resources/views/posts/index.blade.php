@include("partials.header")

<div class="container mt-5">
    <div class="row">
        @if($posts->isNotEmpty())
            @foreach ($posts as $post)
                <div class="col-md-4">
                    @include('partials.post-card', ['post' => $post])
                </div>
            @endforeach
        @else
            <p class="text-center">No posts available.</p>
        @endif
    </div>
</div>

@include("partials.footer")
