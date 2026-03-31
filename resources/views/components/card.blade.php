<div class="card">
    @if($post->img)
        <img src="{{ Storage::url($post->img) }}" class="card-img-top" alt="{{ $post->title }}">
    @endif

    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $post->content }}</p>
        <p class="text-muted">Autore: {{ $post->author }}</p>
    </div>
</div>