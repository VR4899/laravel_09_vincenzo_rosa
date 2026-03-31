<x-layout>
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form class="rounded-4 shadow bg-secondary-subtle p-3 " action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo Post</label>
            <input name='title' type="text" value="{{old('title')}}" class="form-control" id="title" >
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Testo</label>
            <textarea name="content" class="form-control"  id="content" cols="30" rows="10">{{old('content')}}</textarea>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Inserisci immagine</label>
            
            <input name='img' type="file" class="form-control d-flex me-3 " id="img" >
            
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Autore</label>
            
            <input name='author' type="text" value="{{old('author')}}" class="form-control d-flex me-3 " id="author" >
            
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>