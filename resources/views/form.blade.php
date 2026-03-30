<x-layout>
    <form class="rounded-4 shadow bg-secondary-subtle p-3 " action="{{route('post.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Nome del prodotto</label>
            <input name='title' type="text" class="form-control" id="title" >
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Descrizione</label>
            <textarea name="content" class="form-control"  id="content" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Prezzo prodotto</label>
            
            <input name='author' type="text" class="form-control d-flex me-3 " id="author" >
            
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>