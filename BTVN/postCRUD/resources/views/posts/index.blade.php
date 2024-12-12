@include("partials.header")

<div class="container mt-5">
    <div class="row g-3"> <!-- g-3 adds spacing between columns and rows -->
        @foreach ($posts as $post)
            <div class="col-md-4 d-flex">
                @include ("partials.post-card", ["post" => $post])
            </div>
        @endforeach
    </div>
</div>
@include("partials.footer")
