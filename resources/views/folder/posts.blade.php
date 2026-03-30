<x-layout>
    <header class="header bg-light py-5">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-md-6 text-center">
                    <h1 class="display-4">Parliamo tutti insieme</h1>
                    <p class="text-muted">Benvenuto nel nostro blog!</p>
                </div>
            </div>
        </div>
    </header>

    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            @foreach ($posts as $post)
                <div class="col d-flex justify-content-center">
                    <div class="card shadow-sm border-primary" style="width: 18rem;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-truncate">{{ $post->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $post->author }}</h6>
                            <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>